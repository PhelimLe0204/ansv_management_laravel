function myCustomOnChangeHandler(inst) {
    alert("Some one modified something");
    alert("The HTML is now:" + inst.getBody().innerHTML);
}

tinymce.init({
    selector: 'textarea.tinybasic',
    menubar: false,
    height: 300,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});
