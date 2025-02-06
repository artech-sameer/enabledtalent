<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Builder</title>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const components = document.getElementById("components");

            document.getElementById("addText").addEventListener("click", function () {
                addComponent("text");
            });

            document.getElementById("addTextarea").addEventListener("click", function () {
                addComponent("textarea");
            });

            document.getElementById("addSelect").addEventListener("click", function () {
                addComponent("select");
            });

            document.getElementById("addRepeater").addEventListener("click", function () {
                addRepeater();
            });

            function addComponent(type) {
                let html = "";
                if (type === "text") {
                    html = `<input type="text" class="form-control" name="components[]" placeholder="Enter text">`;
                } else if (type === "textarea") {
                    html = `<textarea class="form-control" name="components[]" placeholder="Enter text"></textarea>`;
                } else if (type === "select") {
                    html = `<select class="form-control" name="components[]">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                            </select>`;
                }
                components.innerHTML += `<div class="mb-2">${html}</div>`;
            }

            function addRepeater() {
                let repeaterHtml = `
                    <div class="repeater mb-3">
                        <input type="text" class="form-control mb-1" name="repeaters[]" placeholder="Repeater Field">
                        <button type="button" class="btn btn-sm btn-danger remove-repeater">Remove</button>
                    </div>`;
                components.innerHTML += repeaterHtml;

                document.querySelectorAll(".remove-repeater").forEach(btn => {
                    btn.addEventListener("click", function () {
                        this.parentElement.remove();
                    });
                });
            }

            document.getElementById("savePage").addEventListener("click", function () {
                let form = document.getElementById("pageForm");
                let formData = new FormData(form);
                let data = { title: formData.get("title"), content: [] };

                document.querySelectorAll("input[name='components[]'], textarea[name='components[]'], select[name='components[]']").forEach(input => {
                    data.content.push({ type: input.tagName.toLowerCase(), value: input.value });
                });

                document.querySelectorAll("input[name='repeaters[]']").forEach(input => {
                    data.content.push({ type: "repeater", value: input.value });
                });

                document.getElementById("content").value = JSON.stringify(data.content);
                form.submit();
            });
        });
    </script>
</head>
<body>
    <h1>Page Builder</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <form id="pageForm" method="POST" action="">
        @csrf
        <input type="text" name="title" placeholder="Page Title" required>
        <div id="components"></div>
        <input type="hidden" name="content" id="content">
        <button type="button" id="addText">Add Text</button>
        <button type="button" id="addTextarea">Add Textarea</button>
        <button type="button" id="addSelect">Add Select</button>
        <button type="button" id="addRepeater">Add Repeater</button>
        <button type="button" id="savePage">Save Page</button>
    </form>
</body>
</html>
