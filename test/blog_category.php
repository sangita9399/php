<!DOCTYPE html>
<html>
    <head>
        <title>BLOG CATEGORY Page</title>
    </head>
    <body>
        <?php require_once "view_post.php";
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
                 <td><input type = "submit" name = "add_post" value = "Add Category"></td>
            </tr>
        </table>
        </form>
        <form method = "GET">
        <table border = '1'>
            <div>
                <tr>
                    <th>Category id</th>
                    <th>Category Image</th>
                    <th>Category Name</th>
                    <th>Created Date</th>
                    <th>Actions</th>
                </tr>
            </div>
           <div>
                <?php  fetch_category(); ?>
           </div>
               
        </table>
        </form>

    </body>
</html>


