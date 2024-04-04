<style>
.container {
  position: relative;
  max-width: 500px;
  width: 100%;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.container header {
  font-size: 1.2rem;
  color: #000;
  font-weight: 600;
  text-align: center;
}

.container .form {
  margin-top: 15px;
}

.form .input-box {
  width: 100%;
  margin-top: 10px;
}

.input-box label {
  color: #000;
}

.form :where(.input-box input, .select-box) {
  position: relative;
  height: 35px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #808080;
  margin-top: 5px;
  border: 1px solid #c0c0c0;
  border-radius: 6px;
  padding: 0 15px;
}

.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

.form .column {
  display: flex;
  column-gap: 15px;
}

.form .gender-box {
  margin-top: 10px;
}

.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}

.form .gender {
  column-gap: 5px;
}

.gender input {
  accent-color: #088178;
}

.form :where(.gender input, .gender label) {
  cursor: pointer;
}

.gender label {
  color: #000;
}

.address :where(input, .select-box) {
  margin-top: 10px;
}

.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #808080;
  font-size: 1rem;
}

.form button {
  height: 40px;
  width: 100%;
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  height: 5rem;
  font-weight: 400;
  margin-top: 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.2s ease;
  background: #088178;
}

.form button:hover {
  background: #fff;
  color: #088178;
  border: 1px solid #088178;
}
</style>
<!--  -->
<section class="container">
  <header>Registration Form</header>
  <form action="index.php?action=dangky&act=dangky_action" method="post" class="form" role="form">
      <div class="input-box">
          <label>Full Name</label>
          <input name="txttenkh" required="" placeholder="Enter full name" type="text">
      </div>
      <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input name="txtsodt" required="" placeholder="Enter phone number" type="telephone">
          </div>
          <div class="input-box">
            <label>Username</label>
            <input name="txtusername" required="" placeholder="Enter username" type="text">
          </div>
      </div>
      <div class="gender-box">
        <label>Gender</label>
        <div class="gender-option">
          <div class="gender">
            <input checked="" name="gender" id="check-male" type="radio">
            <label for="check-male">Male</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-female" type="radio">
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-other" type="radio">
            <label for="check-other">Prefer not to say</label>
          </div>
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input required="" name="txtemail" placeholder="Enter email" type="email">
        <div class="column">
          <div class="select-box">
            <select>
              <option hidden="">Country</option>
              <option>Viet Nam</option>
              <option>USA</option>
              <option>UK</option>
              <option>Germany</option>
              <option>Japan</option>
            </select>
          </div>
        <input required=""  name="txtdiachi" placeholder="Enter your city" type="text">
        </div>
        <input required="" name="txtpass" placeholder="Enter password" type="text">
        <input required="" name="retypepassword" placeholder="Confirm password" type="text">
      </div>
      <button type="submit" name="submit">Submit</button>
  </form>
</section>