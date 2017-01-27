   <!-- MAIN PART STARTS -->

<div class="col-sm-6 main">
    <h2><i class="fa fa-users" aria-hidden="true"></i> Project Details</h2>

    <div class="container">
        <?php
        foreach ($select_project_by_id as $value)
        {
          $id = $value->project_id;
        ?>

        <h3 style="color:#2aa6ca;"><?php echo $value->project_title;?></h3>
        <table class="table table-striped table-bordered table-hover table-condensed">

            <tbody>
            <tr>
                <th>Project Title:</th>
                <td><?php echo $value->project_title;?></td>
            </tr>

            <tr>
                <th>Project Members:</th>
                <td><?php echo $value->project_member;?></td>
            </tr>

            <tr>
                <th rowspan="2">Project Duration:</th>
                <td>Start : <?php echo $value->project_start_date;?></td>
            </tr>
            <tr>
                <td>End : <?php echo $value->project_end_date;?></td>
              </tr>
            <tr>
                <th>Funding:</th>
                <td><?php echo $value->project_funding;?></td>
            </tr>

            <tr>
                <th>Outcomes/Remarks:</th>
                <td><?php echo $value->project_remarks;?>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
    <?php
    }
    ?>
</div>


<!-- MAIN BODY ENDS -->