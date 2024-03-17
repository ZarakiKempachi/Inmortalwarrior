<?php
include '../modulos/header.php';
?>
    <section class="my-2 bg-white">
        <div class="container mt-5 ">
            <h2 class="text-center">The Heroes</h2>
            <div>
                <p>Aquí puedes encontrar todos los wod`s de "The Heroes".</p>
            </div>

            <div id="data-table-basic_filter" class="dataTables_filter"><label><input type="search" class=""
                        placeholder="Busca por nombre" id="searchInput" aria-controls="data-table-basic"></label>
                        <button class="btn btn-secondary" id="searchButton" onclick="realizarBusqueda()">Buscar</button>
            </div>
            
            <br>
            <div class="row" id="wodContainer">
                <div class="wods col-md-6 col-lg-4  mb-4"  data-nombre="21 Guns">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">21 Guns</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Abbate">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Abbate</h4>
                        <p>For Time<br>
                            Run 1 mile<br>
                            155 pound Clean and jerk, 21 reps<br>
                            Run 800 meters<br>
                            155 pound Clean and jerk, 21 reps<br>
                            Run 1 Mile</p>
                        <p>In memory of U.S. Marine Corps Sgt. Matthew T. Abbate.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Adambrown">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Adambrown</h4>
                        <p>For Time<br>
                            Two rounds of:<br>
                            295 pound Deadlift, 24 reps<br>
                            24 Box jumps, 24 inch box<br>
                            24 Wallball shots, 20 pound ball<br>
                            195 pound Bench press, 24 reps<br>
                            24 Box jumps, 24 inch box<br>
                            24 Wallball shots, 20 pound ball<br>
                            145 pound Clean, 24 reps</p>
                        <p>In memory of U.S. Navy Chief Special Warfare Operator (SEAL) Adam Lee Brown.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Adrian">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Adrian</h4>
                        <p>For Time<br>
                            Seven rounds of:<br>
                            3 Forward rolls<br>
                            5 Wall climbs<br>
                            7 Toes to bar<br>
                            9 Box jumps, 30" box</p>
                        <p>In memory of U.S. Army Sgt. 1st Class Adrian Elizalde.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Alexander">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Alexander</h4>
                        <p>For Time<br>
                            5 rounds of:<br>
                            31 back squats, 135 lb.<br>
                            12 power cleans, 185 lb.</p>
                        <p>In memory of Staff Sgt. Alexander G. Povilaitis.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Andy">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Andy</h4>
                        <p>For Time, wearing a 20-lb. vest:<br>
                            25 thrusters, 115 lb.<br>
                            50 box jumps, 24 in.<br>
                            75 deadlifts, 115 lb.<br>
                            1.5-mile run<br>
                            75 deadlifts, 115 lb.<br>
                            50 box jumps, 24 in.<br>
                            25 thrusters, 115 lb.</p>
                        <p>In memory of U.S. Army Sgt. 1st Class Andrew T. Weathers.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Arnie">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Arnie</h4>
                        <p>For Time with a single 2 pood kettlebell:<br>
                            21 Turkish get-ups, Right arm<br>
                            50 Swings<br>
                            21 Overhead squats, Left arm<br>
                            50 Swings<br>
                            21 Overhead squats, Right arm<br>
                            50 Swings<br>
                            21 Turkish get-ups, Left arm</p>
                        <p>In memory of Los Angeles County Firefighter Specialist Arnaldo "Arnie" Quinones.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Artie">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Artie</h4>
                        <p>AMRAP in 20 minutes of:<br>
                            5 pull-ups<br>
                            10 push-ups<br>
                            15 squats<br>
                            5 pull-ups<br>
                            10 thrusters, 95 lb.</p>
                        <p>In memory of Police Officer Arthur “Artie” Lopez.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Badger">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Badger</h4>
                        <p>For Time<br>
                            Three rounds of:<br>
                            95 pound Squat clean, 30 reps<br>
                            30 Pull-ups<br>
                            Run 800 meters</p>
                        <p>In honor of U.S. Navy Chief Petty Officer Mark Carter.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Barraza">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Barraza</h4>
                        <p>AMRAP in 18 minutes of:<br>
                            Run 200 meters<br>
                            275 pound Deadlift, 9 reps<br>
                            6 Burpee bar muscle-ups</p>
                        <p>In memory of U.S. Army Staff Sgt. Ricardo Barraza.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Bell">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Bell</h4>
                        <p>For Time<br>
                            Three rounds of:<br>
                            185-lb. deadlifts, 21 reps<br>
                            15 pull-ups<br>
                            185-lb. front squats, 9 reps</p>
                        <p>In memory of Air Force Senior Airman Bryan R. Bell.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Bert">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Bert</h4>
                        <p>For Time:<br>
                            50 burpees<br>
                            400-m run<br>
                            100 push-ups<br>
                            400-m run<br>
                            150 walking lunges<br>
                             400-m run<br>
                             200 squats<br>
                             400-m run<br>
                             150 walking lunges<br>
                             400-m run<br>
                             100 push-ups<br>
                             400-m run<br>
                             50 burpees</p>
                        <p>In memory of U.S. Marine Cpl. Albert Gettings.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Big Sexy">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Big Sexy</h4>
                        <p>For Time<br>
                            5 rounds of:<br>
                            6 deadlifts, 315 lb.<br>
                            6 burpees<br>
                            5 cleans, 225 lb.<br>
                            5 chest-to-bar pull-ups<br>
                            4 thrusters, 155 lb.<br>
                            4 muscle-ups</p>
                        <p>In memory of Sgt. Lance "Big Sexy" McLean.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Blake">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Blake</h4>
                        <p>For Time<br>
                            Four rounds of:<br>
                            100 foot Walking lunge with 45lb plate held overhead<br>
                            30 Box jump, 24 inch box<br>
                            20 Wallball shots, 20 pound ball<br>
                            10 Handstand push-ups</p>
                        <p>In memory of U.S. Navy Senior Chief Cryptologic Technician David Blake McLendon.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Bowen">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Bowen</h4>
                        <p>For Time<br>
                            Three rounds of:<br>
                            Run 800 meters<br>
                            275-lb. deadlifts, 7 reps<br>
                            10 burpee pull-ups<br>
                            53-lb. single arm kettlebell thrusters, 14 reps (7 each arm)<br>
                            20 box jumps, 24-inch box</p>
                        <p>In memory of Captain Jeffrey Bowen.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Bradley">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Bradley</h4>
                        <p>For Time<br>
                            Ten rounds of:<br>
                            Sprint 100 meters<br>
                            10 Pull-ups<br>
                            Sprint 100 meters<br>
                            10 Burpees<br>
                            Rest 30 seconds</p>
                        <p>In memory of U.S. Air Force Senior Airman Bradley R. Smith.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Bradshaw">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Bradshaw</h4>
                        <p>For Time<br>
                            Ten rounds of:<br>
                            3 Handstand push-ups<br>
                            225 pound Deadlift, 6 reps<br>
                            12 Pull-ups<br>
                            24 Double-unders</p>
                        <p>In memory of U.S. Army 1st Lt. Brian Bradshaw.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Brehm">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Brehm</h4>
                        <p>For Time<br>
                            15 foot Rope climb, 10 ascents<br>
                            225 pound Back squat, 20 reps<br>
                            30 Handstand push-ups<br>
                            Row 40 calories</p>
                        <p>In memory of U.S. Army Sgt. Dale G. Brehm.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Brenton">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Brenton</h4>
                        <p>For Time<br>
                            Five rounds of:<br>
                            Bear crawl 100 feet<br>
                            Standing broad-jump, 100 feet<br>
                            Do three Burpees after every five broad-jumps.<br>
                            If you've got a twenty pound vest or body armor, wear it.</p>
                        <p>In memory of Field Training Officer Timothy Quinn Brenton.</p>
                    </div>
                </div>
                
                <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="Brian">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Brian</h4>
                        <p>For Time<br>
                            Three rounds of:<br>
                            15 foot Rope climb, 5 ascents<br>
                            185 pound Back squat, 25 reps</p>
                        <p>In memory of U.S. Marine Corps Sgt. Matthew T. Abbate.</p>
                    </div>
                </div>
                
            </div>
                <!-- -----------------------------------------------------------                  -->
                <div id="pagination" class="text-center mt-4">
                    <button onclick="mostrarPagina(-1)" id="atras"  class="btn btn-secondary">Anterior</button>
                    <span id="paginaActual" class="mx-2">1</span>
                    <button onclick="mostrarPagina(1)" id="siguiente"  class="btn btn-secondary">Siguiente</button>
                </div>
            
        </div>
        </div>
    </section>

    </div>

    <?php 
include '../modulos/footer.php';
?>