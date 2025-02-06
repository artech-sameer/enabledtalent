
    <style>
        /* Hide the popup and overlay by default */
        #popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
/*            background: white;*/
            padding: 20px;
/*            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);*/
            border-radius: 5px;
            z-index: 1000;
        }

        #popup-overlay {
            display: none; /* Hide overlay by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .popup-button {
            background: red;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .popup-content {
            text-align: center;
            font-family: 'Arial', sans-serif;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
            max-width: 600px;
            margin: 0 20px;
        }

         #close-popup {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            font-size: 36px;
            color: #ff0000;
            cursor: pointer;
            font-weight: bold;
        }

        #close-popup:hover {
            color: #ff0000;
        }
        h1{
        	line-height: 42px;
    		margin-bottom: 30px;
        }
    </style>


    <div id="popup-overlay"></div>

    <div id="popup">
        <div class="popup-content">
            <h1>We're Working on Something Amazing!</h1>
            <p>
                Our website is currently under construction as we prepare to bring you an enhanced experience.
                We appreciate your patience and can't wait to show you what's coming soon. Stay tuned!
            </p>
            <!-- Close Button -->
            <button id="close-popup" class="popup-button">X</button>
        </div>


</div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Interval setting (change to "1 hour", "1 minute", etc. as needed)
            let intervalSetting = "1 day"; // Change this to the desired interval (e.g., "1 hour", "1 minute", etc.)

            let intervalParts = intervalSetting.split(' ');
            let intervalValue = parseInt(intervalParts[0]);
            let intervalType = intervalParts[1];

            // Function to check if the interval has passed and reset the popup visibility
            function shouldResetPopup() {
                let lastClosed = localStorage.getItem("popup_last_closed");
                if (!lastClosed) return false;

                let lastClosedTime = new Date(parseInt(lastClosed));
                let currentTime = new Date();
                let difference;

                switch (intervalType) {
                    case 'minute':
                        difference = (currentTime - lastClosedTime) / (1000 * 60); // minutes
                        break;
                    case 'hour':
                        difference = (currentTime - lastClosedTime) / (1000 * 60 * 60); // hours
                        break;
                    case 'day':
                        difference = (currentTime - lastClosedTime) / (1000 * 60 * 60 * 24); // days
                        break;
                    default:
                        difference = 0;
                }

                return difference >= intervalValue;
            }

            // If the popup is closed and interval has passed, reset it
            if (shouldResetPopup()) {
                localStorage.removeItem("popup_closed");
                localStorage.removeItem("popup_last_closed");
            }

            // Check if popup is already closed
            let popupClosed = localStorage.getItem("popup_closed");

            // If the popup was not closed, show it
            if (!popupClosed) {
                document.getElementById("popup").style.display = "block";
                document.getElementById("popup-overlay").style.display = "block";
            }

            // Close popup function
            document.getElementById("close-popup").addEventListener("click", function () {
                document.getElementById("popup").style.display = "none";
                document.getElementById("popup-overlay").style.display = "none";
                localStorage.setItem("popup_closed", "true"); // Mark the popup as closed
                localStorage.setItem("popup_last_closed", Date.now()); // Save the close timestamp
            });
        });
    </script>

<?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/common/layouts/alert-popup.blade.php ENDPATH**/ ?>