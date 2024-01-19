<!-- resources/views/mypage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Page</title>

    <style>
        *{

        }

        h1{
            padding-left: 20px;

        }

        body {
            padding: 2%;
            background-image: url(https://i.pinimg.com/564x/50/43/1e/50431e86e0c619bb0215c1a87ae2ec37.jpg);
            background-size: cover;
        }

        .main {

            width: 500px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 6%;
            color: black;

            background: rgba(255, 255, 255, 0.6); /* ทำให้สีขาวมีความโปร่งแสง */
            border: 2px solid #ccc;
            border-radius: 20px;
            backdrop-filter: blur(20px);


        }


        .main_two{
            width: 120%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .table_1 {
            width: 40%; /* ปรับความกว้างตามต้องการ */

        }


        .table_scroll {
            width: 100%;
            height: 40vh; /* กำหนดความสูงของ .main */
            overflow-y: auto; /* เพิ่มการเลื่อนในแนวตั้ง */
            border-radius: 10px;
        }

        .main>button{
            border: none;
            outline: none;
            border-radius: 40px;
        }

        .main h1{
    font-size: 34px;
    text-align: center;
}

.main .form-input{
    width: 75%;
    height: 15px;
    margin: 10px 0;
}
.main .form-input-ui{
    width: 30%;
    height: 100%;
    margin: 10px 0;
    padding: 20px 20px 10px 20px;
    padding-bottom: 15px;
    font-size: 10px;
}

.ages{
    margin-left: 100px;
}
.input-age{
    margin-left: 10px;
}

.form-group input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(225, 225, 225, 2);
    border-radius: 40px;
    font-size: 20px;
    color: #fff;
    padding: 20px 45px 20px 20px;
}
.form-date input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(225, 225, 225, 2);
    border-radius: 40px;
    font-size: 30px;
    color: #fff;
}

.form-age input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(225, 225, 225, 2);
    border-radius: 40px;
    font-size: 20px;
    color: #fff;
}

.Text-area > textarea{
    padding-top: 0px;
    padding-left: 10px;
    border-radius: 10px;
}

.form-submit input{
    width: 90%;
    height: 60%;
    background: transparent;
    border: none;
    outline: none;
    border-radius: 40px;
    font-size: 16px;
    color: #fff;

}


.form-submit{
    display: flex;

}

.form-submit-one{
    margin: 20px;
    padding: 20px;
}

.form-submit-two{
    margin: 20px;
    padding: 20px;
}

.form-submit-two input{
    padding: 40px;
}


    </style>
</head>
<body>
    <div class="main">

        <div class="main_two">
            <div>
                <?php
                $my_val = isset($_POST['my_val']) ? $_POST['my_val'] : 1; // ให้ค่าเริ่มต้นเป็น 1 หรือค่าที่คุณต้องการ
                ?>
                <h1>Workshop #HTML - FORM </h1>
                <br>
                <form method="post" action="/my-route">
                    @csrf
                    <div class="table_scroll">
                        <table class="table_1">
                            <tbody>
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <label><input type="text" class="form-input"></label>
                                </div>
                                <div class="form-group">
                                    <label>นามสกุล</label>
                                    <label><input type="text" class="form-input"></label>
                                </div>
                                <div class="form-date">
                                    <label>วัน/เดือน/ปีเกิด </label>
                                    <label class="ages">&nbsp;&nbsp;&nbsp; อายุ <br></label>
                                    <label><input type="date" placeholder="dd/mm/yyyy" class="form-input-ui"></label>
                                    <label class="input-age"><input type="text" class="form-input-ui"></label>
                                </div>
                                <div class="form-radio">
                                    <label><br>เพศ &nbsp;</label>
                                    <label><input id="radio_a"
                                            type="radio"
                                            name="same_radio" />
                                            <label for="radio_a">ชาย</label>
                                        <input id="radio_b"
                                            type="radio"
                                            name="same_radio" />
                                            <label for="radio_a">หญิง</label>
                                    </label>
                                </div>
                                <div class="form-file">
                                    <label><br> รูป</label>
                                    <label><input type="file" class="form-input"></label>
                                </div>
                                <div class="form-group">
                                    <label>ที่อยู่</label>
                                    <label class="Text-area";><textarea rows="4" class="form-input"></textarea></label>
                                </div>
                                <div class="form-group">
                                    <label>สีที่ชอบ</label>
                                    <label>
                                        <select>
                                            <option value=""
                                            disabled
                                            selected></option>
                                            <option>สีแดง</option>
                                            <option>สีส้ม</option>
                                            <option>สีชมพู</option>
                                            <option>สีเขียว</option>
                                            <option>สีเหลือง</option>
                                            <option>สีฟ้า</option>
                                            <option>สีม่วง</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="form-radio">
                                    <label>แนวเพลงที่ชอบ &nbsp;</label>
                                    <label>
                                        <input id="radio_a"
                                            type="radio"
                                            name="same_radio" class="form-radio"/>
                                            <label for="radio_a">เพื่อชีวิต</label>
                                        <input id="radio_b"
                                            type="radio"
                                            name="same_radio" class="form-radio"/>
                                            <label for="radio_b">ลูกทุ่ง</label>
                                        <input id="radio_c"
                                            type="radio"
                                            name="same_radio" class="form-radio"/>
                                            <label for="radio_c">อื่นๆ</label>
                                    </label>
                                </div>

                                <div class="form-Accept">
                                    <label><br><input type="checkbox" name="checkbox_Accept" class="form-checkbox"> ยินยอมให้เก็บข้อมูล <br></label>
                                </div>

                                <div class="form-submit">
                                    <label><br><input type="reset" value="Reset" style="background-color:#990033; color:white;" class="form-submid-one"></label>
                                    <label><br><input type="submit" value="Submit" style="background-color:#006600; color:white;" class="form-submid-two"></label>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </form>
                <br>

            </div>
        </div>
    </div>
</body>
</html>