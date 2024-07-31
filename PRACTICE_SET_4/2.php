<!-- Create a PHP program which will create buttons for the following functions -
• sort
• search
• sum
• merge
and print the data accordingly. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
    <h1>PHP Functions</h1>
    <form action="" method="post">
        <button type="submit" name="sort" value="asc">Sort Ascending</button><br>
        <button type="submit" name="sort" value="desc">Sort Descending</button><br>
        <input type="text" name="search_value" placeholder="Enter value to search"><br>
        <button type="submit" name="search">Search</button><br>
        <button type="submit" name="sum">Sum</button><br>
        <button type="submit" name="merge">Merge</button>
    </form>

    <?php
    if (isset($_POST['sort'])) {
        sortData($_POST['sort']);
    } elseif (isset($_POST['search'])) {
        searchData();
    } elseif (isset($_POST['sum'])) {
        sumData();
    } elseif (isset($_POST['merge'])) {
        mergeData();
    }

    function sortData($order = 'asc')
    {
        $data = [5, 3, 8, 4, 2];
        print_r($data);

        echo"<br>";
        if ($order == 'asc') 
        {
            echo"sort";
            echo"<br>";
            sort($data);
        } else
         {
            echo"reversed sort";
            echo"<br>";
            rsort($data);
        }
        print_r($data);
    }

    function searchData()
    {
        $data = [5, 3, 8, 4, 2];
        echo "DATA : ";
        echo"<br>";
        print_r($data);

        if (isset($_POST['search_value']) && !empty($_POST['search_value'])) {
            $searchValue = $_POST['search_value'];
            $result = array_search($searchValue, $data);
            if ($result !== false) {
                echo "<br>"."Value " . $searchValue . " found at index " . $result;

            } else {
                echo "<br>"."Value " . $searchValue . " not found in the array.";
            }
        } 
    }

    function sumData()
    {
        $data = [5, 3, 8, 4, 2];
        print_r($data);
        echo"<br>";
        $sum = array_sum($data);
        echo "Sum of the array: " . $sum;
    }

    function mergeData()
{
    $data1 = [1, 3, 5];
    $data2 = [2, 4, 6];
    echo "Data 1: ";
    print_r($data1);
    echo "<br>";
    echo "Data 2: ";
    print_r($data2);
    echo"<br>";
    $mergedData = array_merge($data1, $data2);
    sort($mergedData);
    echo "Merged Data: ";

    print_r($mergedData);
}
    ?>
</body>
</html>
