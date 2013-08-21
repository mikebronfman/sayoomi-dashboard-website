
<div style="margin:auto; width:300px; margin-top:50px; text-align: center;">
    {validation_errors()}

    {form_open('account/check')}

    <label for="username">Username:</label>

    <input type="text" size="20" id="username" name="username"/>

    <br/>

    <label for="password">Password:</label>

    <input type="password" size="20" id="passowrd" name="password"/>

    <br/>

    <input type="submit" class="btn" style="margin-top: 10px;" value="Login"/>

</form>
</div>
<div style="margin:auto; width:300px; margin-top:30px; text-align: center;">
    <h1>- OR -</h1><br/>
    <a class="btn" href="/account/new">Make a new account</a>
</div>