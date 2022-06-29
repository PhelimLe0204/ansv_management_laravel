<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="form-group">
        <label for="content">Mô tả chi tiết</label>
        <textarea name="content" id="content" class="form-control tinybasic" cols="30" rows="3"></textarea>
    </div>
    <script src="https://cdn.tiny.cloud/1/ht2q8shag22vyn89yaaa2xbmc0c9mg5bqppl375w2z6iz0qn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.tinybasic',
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
</body>

</html>