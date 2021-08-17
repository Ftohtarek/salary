<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="cell">
                Total Salary
            </div>
        </div>
        <div class="col-4">
            <div class="cell">
                Discount
            </div>
        </div>
        <div class="col-4 ">
            <div class="cell">
                Net Salary
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="cell">
                <?php
                echo $salaryDetails['totalSalary']
                ?>
            </div>
        </div>
        <div class="col-4">
            <div class="cell">
                <?php
                echo $salaryDetails['discount']
                ?>
            </div>
        </div>
        <div class="col-4 ">
            <div class="cell">
                <?php
                echo $salaryDetails['netSalary']
                ?>
            </div>
        </div>
    </div>
</div>