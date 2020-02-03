<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <?php require_once "add_category_validate.php";?>
        <form method="POST">
        <table>
            <tr>
                <th>Add NEW CATEGORY</th>
            </tr>
            <tr>
                <td>
                    <label>Title</label>
                </td>
                <td><input type = "text" name = "title" value ='<?php getvalue('title')?>'></td>
            </tr>
            <tr>
            <td>content</td>
            <td><textarea rows="3"  cols = "25" name = "content" value ='<?php getvalue('content')?>'></textarea> </td>
            </tr>
            <tr>
                <td>url</td>
                <td><input type = "text" name = "url" value ='<?php getvalue('url')?>'> </td>
            </tr>
            <tr>
                <td>Meta Title</td>
                <td><input type = "text" name = "meta_title" value ='<?php getvalue('meta_title')?>'> </td>
            </tr>
            <tr>
                <td>Parent Category</td>
                <?php $prefixValues = ['electronics', 'Lifestyle', 'health', 'education']; ?>
                <td><select name = "category">
                <?php 
                    $selected = "selected='selected'";
                    foreach($prefixValues as $prefix):
                    ?>
                    <option value=<?php echo $prefix?>
                        <?php echo (in_array(getData('category'),[$prefix]))? $selected : ""   ?>>
                        <?php echo $prefix?>
                    </option>
                    <?php endforeach; ?>
                </select></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type = "file" name = "image" value = 'upload image'></td>
            </tr>
            <TR>
                <TD><input type="submit" name = "add_category_btn"></TD>
            </TR>
        </table>
        </form>
    </body>
</html>