<!DOCTYPE html>
<html>
<head>
    <title>User Input Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>User Input Table</h1>
    
    <form id="userForm">
        <label for="text">Text:</label>
        <input type="text" id="text" name="text"><br><br>
        
        <!-- <label for="age">Status:</label>
        <input type="text" id="status" name="status"><br><br> -->
        
        <button type="button" onclick="addRow()">Add to Table</button>
    </form>
    
    <table id="dataTable">
        <thead>
            <tr>
                <th>Text</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table rows will be added here dynamically -->
        </tbody>
    </table>

    <script>
        function addRow() {
            var text = document.getElementById("text").value;
            // var status = document.getElementById("status").value;
            
            if (text) {
                var table = document.getElementById("dataTable");
                var newRow = table.insertRow(table.rows.length);
                var cell1 = newRow.insertCell(0);
                // var cell2 = newRow.insertCell(1);
                cell1.innerHTML = text;
                // cell2.innerHTML = status;
                
                // Clear input fields
                document.getElementById("text").value = "";
                document.getElementById("status").value = "";
            } else {
                alert("!");
            }
        }
    </script>
</body>
</html>
