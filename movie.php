<?php
session_start();
if(!isset($_SESSION["email"])){
    header("location:login.php");
}
include_once 'task.php';
$select_movie="SELECT * FROM movie";
$result = $conn->query($select_movie);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body align="center">
    <h1>Home Page</h1>
    <p><b>WELCOME<br><?php  echo $_SESSION["email"];?></b></p>
<table align="center" border="1px" style="width:600px; line-height:auto">
    <th align='center' colspan="5"><b>MOVIES<b></th>
    <tr>
    <t>
    <th>Movie_Name</th>
    <th>Movie_year</th>
    <th>Actor</th>
    <th>Actress</th>
    <th>Banner_image</th>
    </t>

    <form action="logout.php">
        <button style="float:right">Logout</button>
    </form>
    <?php
    while($row=$result->fetch_assoc())
    {
        ?>
            <tr>
            <td><?php echo $row['movie_name'];?></td>
            <td><?php echo $row['movie_year'];?></td>
            <td><?php echo $row['actor'];?></td>
            <td><?php echo $row['actress'];?></td>
            <td><img width="300" height="300" src="<?php echo $row['banner_image'];?>"></td>
            </tr>
        <?php
            }
        ?>
</table>
</body>
</html>
