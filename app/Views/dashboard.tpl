{extends file="layout.tpl"}

{block name="content"}
<section class="content">
    <div class="container-fluid">
        <!-- Stats -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>140</h3>
                        <p>Total Appointments</p>
                    </div>
                </div>
            </div>
            <!-- Add other stats -->
        </div>

        <!-- Patient Table -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Patient Details</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Date</th>
                            <th>Doctor</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $patients as $patient}
                        <tr>
                            <td>{$patient.name}</td>
                            <td>{$patient.mobile}</td>
                            <td>{$patient.date}</td>
                            <td>{$patient.doctor}</td>
                            <td>{$patient.department}</td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
{/block}