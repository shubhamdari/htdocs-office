@extends('layout.header');
<body>
    <div class="container">
        <div class="row">
            <h2>Login Form</h2>
            <form action="">
                <div class="group-form">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your mail">
                </div>
                <div class="group-form">
                    <label>Full Name</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your password">
                </div><br>
                <button type="submit"  class="submit">Login</button>
                <a href="registration">Create a New Account</a>
            </form>
        </div>
    </div>
</body>
@extends('layout.footer');