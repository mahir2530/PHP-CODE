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
        <button type="submit" name="sort" value="asc">Sort Ascending</button>
        <button type="submit" name="sort" value="desc">Sort Descending</button>
        <input type="text" name="search_value" placeholder="Enter value to search">
        <button type="submit" name="search">Search</button>
        <button type="submit" name="sum">Sum</button>
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
        if ($order == 'asc') {
            sort($data);
        } else {
            rsort($data);
        }
        print_r($data);
    }

    function searchData()
    {
        $data = [5, 3, 8, 4, 2];
        if (isset($_POST['search_value']) && !empty($_POST['search_value'])) {
            $searchValue = $_POST['search_value'];
            $result = array_search($searchValue, $data);
            if ($result !== false) {
                echo "Value " . $searchValue . " found at index " . $result;
            } else {
                echo "Value " . $searchValue . " not found in the array.";
            }
        } else {
            echo "Please enter a value to search.";
        }
    }

    function sumData()
    {
        $data = [5, 3, 8, 4, 2];
        $sum = array_sum($data);
        echo "Sum of the array: " . $sum;
    }

    function mergeData()
    {
        $data1 = [1, 3, 5];
        $data2 = [2, 4, 6];
        $mergedData = array_merge($data1, $data2);
        sort($mergedData);
        print_r($mergedData);
    }
    ?>
</body>
</html>
