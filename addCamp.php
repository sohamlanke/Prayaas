<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/addCamp.css">
        <link
      href="https://fonts.googleapis.com/css2?family=Pattaya&family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    </head>
    <body background="">
<div class="formBox">
        <form action = "includes/createCampaign.php" id="form1" method="post" enctype="multipart/form-data">
            <h1 style="background-color: rgb(34, 162, 248);">Add Campaign</h1>
            <div class="padme">
                <label for="title">Title Name: </label>
                <input type="text" placeholder="Add title" id="title" class="all" required autocomplete="off" name="title"> <br>
                <label id="dis" for="discription">Descriptions: </label><br>

                <textarea id="text1" name="desc1" rows="15" cols="125" required autocomplete="off">add discription  here </textarea>
                <!-- <textarea id="text2" name="desc2" rows="15" cols="50" required autocomplete="off">add discription 2 here </textarea> -->

            </div>
            <DIV class="padme">   
                
            </DIV>
                <input type="file" name="fileToUpload"  id="file" required autocomplete="off"/>
            <button type="submit" form="form1" value="submit" name="submit" >Post</button>
        </form>
    </div>
    </body>
</html>