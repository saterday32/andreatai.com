<h1>Guests</h1>

<table>
  <?php
  $con=mysqli_connect('pdb35.awardspace.net', '3009833_omis120database', 'omis120database', '3009833_omis120database');

  $sql="SELECT * FROM guestbook";

  $result=mysqli_query($con, $sql);
  if (mysqli_num_rows($result)>0) {
    while($row = mysqli_fetch_array($result)) {
      ?>
      <tr>
        <td> <?= $row["Name"] ?> </td>
        <td> <?= $row["Email"] ?> </td>
        <td> <?= $row["Comment"] ?> </td>
      </tr>
      <?
    }
  } else{
      print "There are no values";
  }
  mysqli_close();
  ?>
</table>
