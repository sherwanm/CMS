<html>

<input type="file" name= "image">
<input type="button" id="btn" value="Hallo">

<?php



if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['img'])){




        ?>
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($_POST['img']); ?>" />
<?php
    }
}
echo "
<script type='text/javascript'>

    let btn = document.getElementById('btn');

    btn.addEventListener('click', function(){
        let r = new XMLHttpRequest();
        const fileInput = document.querySelector('input[name=";.""image']');
        const file = fileInput.files[0]; // Get the first (and only) file from the FileList
        if (file) {
            var file2 = file;
                    }

        r.open('POST', 'test.php', true);
        r.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        r.onreadystatechange = function() {
            console.log('Hlaaksdjfls');
        }
        r.send('img=', )
    }); </script>";

    echo "<script type='text/javascript'>
    alert('Hello from PHP!');
</script>";


?>
</html>