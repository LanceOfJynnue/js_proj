<html>
<head>
    
    <title>Student Results</title>
    <script type="text/javascript">
    
    function getReport(){
        const txtName = document.getElementById("txtName").value;
        const txtClass = document.getElementById("txtClass").value;
        let english = parseInt(document.getElementById("english").value);
        let history = parseInt(document.getElementById("history").value);
        let maths = parseInt(document.getElementById("maths").value);
        let science = parseInt(document.getElementById("science").value);

        let total_marks = english + history + maths + science;
        let average_marks = total_marks/4;

        if(average_marks >= 95){
            grade = "A+";
            remarks = "Excellent";
        } else if(average_marks < 95 && average_marks > 75){
            grade = "B";
            remarks = "Passed";
        } else {
            grade = "F";
            remarks = "Failed";
        }

        document.getElementById("txtStudentName").value = txtName;
        document.getElementById("txtStudentClass").value = txtClass;
        document.getElementById("txtTotalMarks").value = total_marks;
        document.getElementById("txtAvgMarks").value = average_marks;
        document.getElementById("txtGrade").value = grade;
        document.getElementById("txtResult").value = remarks;   
    }
    
    </script>
</head>
<body>     
        <fieldset style="width:600px">
            <legend><b>Student Input Section:</b></legend>
            Name:<input type="text" id="txtName"> &nbsp;&nbsp;
            Class:<input type="text" id="txtClass"> <br/><br/>
            <table border="1">
                <tr><td>English</td><td><input type="number" id="english"></td></tr>
                <tr><td>History</td><td><input type="number" id="history"></td></tr>
                <tr><td>Maths</td><td><input type="number" id="maths"></td></tr>
                <tr><td>Science</td><td><input type="number" id="science"></td></tr>               
            </table><br/><br/>
            <input type="button" value="Get Result" onClick="getReport();">
        </fieldset>
        
            <h2>Report Card</h2>
            
            <table border="1">
                <tr><td>Name</td><td><input type="text" id="txtStudentName" readonly></td></tr>
                <tr><td>Class</td><td><input type="text" id="txtStudentClass" readonly></td></tr>
                <tr><td>Total Marks</td><td><input type="text" id="txtTotalMarks" readonly></td></tr>
                <tr><td>Average Marks</td><td><input type="text" id="txtAvgMarks" readonly></td></tr>
                <tr><td>Grade</td><td><input type="text" id="txtGrade" readonly></td></tr>
                <tr><td>Remarks</td><td><input type="text" id="txtResult" readonly></td></tr>
            </table>
        
</body>
</html>