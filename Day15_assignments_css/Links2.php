<!DOCTYPE html>
<html>
<head>

<title>Dynamic Links with Icons</title>
<style>

  .file-link {
    display: flex;
    align-items: center;
    color: blue;
    text-decoration: none;
    margin-bottom: 10px;
  }

  .file-link:hover {
    text-decoration: underline;
  }


  .file-icon {
    display: inline-block;
    width: 20px;
    height: 30px;
    margin-right: 10px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  .file-icon.docx {
    background-image: url('link4.png');
  }

  .file-icon.xlsx {
    background-image: url('link3.png');
  }

  .file-icon.ppt {
    background-image: url('link2.png');
  }

  .file-icon.pdf {
    background-image: url('link.png');
  }

  div{
  background-color: blue;
}
</style>
</head>
<body>

  <a href="document.docx" class="file-link">
  <span class="file-icon <?php echo pathinfo('document.docx', PATHINFO_EXTENSION); ?>"></span>
  Document file (DOCX)
</a>

<a href="spreadsheet.xlsx" class="file-link">
  <span class="file-icon <?php echo pathinfo('spreadsheet.xlsx', PATHINFO_EXTENSION); ?>"></span>
  Spreadsheet file (XLSX)
</a>

<a href="presentation.ppt" class="file-link">
  <span class="file-icon <?php echo pathinfo('presentation.ppt', PATHINFO_EXTENSION); ?>"></span>
  Presentation file (PPT)
</a>

<a href="document.pdf" class="file-link">
  <span class="file-icon <?php echo pathinfo('document.pdf', PATHINFO_EXTENSION); ?>"></span>
  PDF file (PDF)
</a>

</body>
</html>