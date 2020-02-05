<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php  require_once "add_post_validate.php";?>
        <form method = "POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Title</td>
                    <td><input type = "text" name = "title" 
                    value ='<?php getvalues('title')?>'> </td>
                </tr>
                <tr>
                    <td>content</td>
                    <td><textarea rows="3"  cols = "25" name = "content" 
                    value ='<?php getvalues('content')?>'></textarea> </td>
                </tr>
                <tr>
                    <td>url</td>
                    <td><input type = "text" name = "url" 
                    value ='<?php getvalues('url')?>'> </td>
                </tr>
                <tr>
                    <td>Published at</td>
                    <td><input type = "date" name = "published_at" 
                    value ='<?php getvalues('published_at')?>'> </td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><select name = "blog_category[]" multiple>
                     <?php  fetch_category('parent_category','p_category');?>

                    </select> </td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type = "file" name = "image" 
                    value = ''></td>
                </tr>
                <tr>
                    <td><input type = "submit" name = "submit_post"></td>
                </tr>

            </table>
        </form>
    </body>

</html>