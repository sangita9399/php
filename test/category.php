<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <?php require_once "view_category.php";
        ?>
        <form method="POST">
        <table>
            <tr>
                <td><input type = "submit" name = "manage_category" value = "Manage Category"></td>
                <td><input type = "submit" name = "my_profile" value = "My Profile"></td>
                <td><input type = "submit" name = "logout" value = "Logout"></td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th>Blog Post</th>
            </tr>
            <tr>
                 <td><input type = "submit" name = "add_category" value = "Add Blog Post"></td>
            </tr>
        </table>

        </form>
        <form method = "GET">
        <table border = '1'>
            <div>
                <tr>
                    <th>Post_id</th>
                    <th>Category Name</th>
                    <th>Title</th>
                    <th>Published At</th>
                    <th>Actions</th>
                </tr>
            </div>
           <div>
                <?php  fetch_post(); ?>
           </div>
               
        </table>
        </form>

    </body>
</html>


