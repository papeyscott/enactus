<html>
    <head>
        <meta charset="utf-8">
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
       
    </meta>

</head>
    <body>
 
            <textarea id="editor1" name="editor"></textarea>
          
      <script src="ckeditor/ckeditor.js"></script>
      <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
    </body>
</html>