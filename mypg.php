<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="mypg.css">
    <script src="mypg.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <!--<img src="./image/bgimage.jpg" alt="" class="myimg">-->
    <div class="wrapper">
        <h2 class="">Contact Us</h2>

        <div id="error_message sucess "> </div>

        <!--2nd div close-->

        <form id="myform" action="" onSubmit="return validation()">

            <div class="input_field">
                <input type="text" placeholder="Name" id="name">
            </div>

            <div class="input_field">
                <div class="custom_select">
                    <select name="" id="subject">
                        <option value="">Select</option>
                        <option value="travellinginquery">Travelling Inquery</option>
                        <option value="personal contact">Personal Contact</option>
                        <option value="paymentproblem">Payment Problem</option>
                    </select>

                </div>
            </div>

            <div class="input_field">
                <input type="text" placeholder="Phone" id="phone">
            </div>

            <div class="input_field">
                <input type="text" placeholder="Email" id="email">
            </div>

            <div class="input_field">
                <textarea id="message" placeholder="Message"></textarea>
            </div>

            <div class="btn">
                <input type="Submit">
            </div>


        </form>


    </div>
    <!--1st div close-->


   

</body>

</html>