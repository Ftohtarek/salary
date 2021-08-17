<div class="container mt-5">
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Choose Department</label>
            <select name="department" class="form-control">
                <option value="chemistry">Chemistry</option>
                <option value="physical">Physical</option>
                <option value="network">Network</option>
                <option value="it">It</option>
                <option value="frontEndDeveloper">Front End Developer</option>
                <option value="backEndDeveloper" selected>Back End Developer</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Work Hour Per Month</label>
            <input type="number" name='hour' class="form-control" placeholder="Hour">
        </div>
        <div class="form-group">
            <button type="submit" name='submit' class="btn btn-outline-dark w-100">
                submit
            </button>
        </div>
    </form>
</div>