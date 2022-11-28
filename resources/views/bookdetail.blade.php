@extends('temp')
@section('title', 'Home')
@section('content')

<?php
include_once("config.php");
$id = $_GET['id'];
$books = gbs_data($books, "SELECT * FROM books WHERE id=$id");
while($res = gbs_fetch_array($result))
{
$name = $res['name'];

//you can display more row data by id 

}
?>
<?php echo $name; ?> 



@endsection