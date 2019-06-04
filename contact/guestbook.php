<h1>Guests</h1>

<table>
  <?php
  $con=mysqli_connect('pdb35.awardspace.net', '3009833_guestbook', 'andreataiguestbook32', '3009833_guestbook');

  $sql="SELECT * FROM guestbook";

  $result=mysqli_query($con, $sql);
  if (mysqli_num_rows($result)>0) {
    while($row = mysqli_fetch_array($result)) {
      ?>
      <tr>
        <td> <?= $row["Name"] ?> </td>
        <td> <?= $row["Email"] ?> </td>
      </tr>
      <?
    }
  } else{
      print "There are no values";
  }
  mysqli_close();
  ?>
</table>
