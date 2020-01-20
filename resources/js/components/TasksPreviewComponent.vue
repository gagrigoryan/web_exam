<template>
    <div class="tasks">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">График выполненных заданий</h5>
                        <h3 class="card-title"><i class="tim-icons icon-trophy text-primary"></i> 763,215</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartLinePurple"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">График невыполненных заданий</h5>
                        <h3 class="card-title"><i class="tim-icons icon-lock-circle text-primary"></i> 763,215</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartLineGreen"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "TasksPreviewComponent"
    }
</script>

<style scoped>

</style>
