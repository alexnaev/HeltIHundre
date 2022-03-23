<?php
require_once 'shared/header.php';
?>

<main class="flex-shrink-0">
    <div class="container mt-5">
        <div class="row row-cols-1 rowcols-lg-2">
            <div class="col-lg-4 col border-end border-2">
                <h1>Helt I Hundre: A Coding Project</h1>
                <h4 class="lead">
                    Live life one loop at a time. A javascript coding exercise using loops. Write a program that displays the numbers from 0 to 100. Display the even numbers in <strong>BOLD.</strong>
                </h4>
                <h2 class="mt-5 border-bottom border-2">Instructions</h2>
                <p>Enter a starting value and an ending value. Press the button and the values will appear.</p>
            </div>
            <div class="col-lg-8 col">
                <div>
                    <h5>Enter Values</h5>
                    <form class="row gy-2 gx-3">
                        <div class="col">
                            <input type="number" id="startValue" class="form-control" placeholder="Start Value" value="0" aria-label="Start Value">
                        </div>
                        <div class="col">
                            <input type="number" id="endValue" class="form-control" placeholder="End Value" value="0" aria-label="End Value">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button id="btnsubmit" type="button" class="btn btn-dark btn-lg">Helt I Hundre!</button>
                        </div>
                    </form>
                    <h2 class="border-bottom border-2 mt-5">Results</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <tbody id="results">
                                <!-- RESULTS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'shared/footer.php';
?>