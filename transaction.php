<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>book_store</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="skyblue">
<center>
<table width="80%" border="0" bgcolor="#cccccc">
  <tr>
  
    <td height="120"><center>  <img src="images/logo2.jpeg" width="100" height="100" alt="logo" /> <br />BOOKSTORE MANAGEMENT SYSTEM
       
    </center></td>
  </tr>
</table>
<hr align="center" color="#000000" width="80%" size="5%" />
<table width="80%" border="0">
  <tr>
    <td height="30"><center>
      <ul id="MenuBar1" class="MenuBarHorizontal">
        <li><a href="home.php" title="click to go home" target="home.php">Home</a>          </li>
        <li><a href="author.php" title="add author">Author</a></li>
        <li><a class="MenuBarItemSubmenu" href="#">Authorship</a>
          <ul>
            <li><a href="author.php" title="Add author" class="MenuBarItemSubmenu">Author</a>
              <ul>
                <li><a href="#">Item 3.1.1</a></li>
                <li><a href="#">Item 3.1.2</a></li>
              </ul>
            </li>
            <li><a href="book_author.php" title="add author to the book">Book author</a></li>
            <li><a href="#">Item 3.3</a></li>
          </ul>
        </li>
        <li><a href="book.php" title="add book">Book</a></li>
        <li><a href="customer.php" title="add customer">Customer</a></li>
        <li><a href="#" class="MenuBarItemSubmenu">Bundle</a>
          <ul>
            <li><a href="bundle.php" title="add bundle">Add bundle</a></li>
            <li><a href="book_bundle.php" title="add books in the bundle">book bundle</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">Order</a>
          <ul>
            <li><a href="order.php" title="make an order"> Order</a></li>
            <li><a href="book_order.php" title="make a book order">Book Order</a></li>
          </ul>
        </li>
        <li><a href="transaction.php" title="make transaction">Transaction</a></li>
        <li><a href="report.php" title="generate reports">Report</a></li>
        <li><a href="help.php" title="click for help services">Help</a></li>
      </ul>
    </center></td>
  </tr>
</table>
<table width="80%" border="0">
  <tr>
    <td height="250" bgcolor="#ffffff"><center>
      Transaction Page
    </center></td>
  </tr>
</table>
<table width="80%" border="1" bgcolor="#cccccc">
  <tr>
    <td height="30"><center>&copy;COPYRIGHT 2023 Industrial Training.All right reserved</center></td>
  </tr>
</table>
</center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>