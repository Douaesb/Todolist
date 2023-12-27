<?php
require_once('../controller/usercontroller.php');
require_once('../controller/taskcontroller.php');

$user = new usercontroller();
$user->isLoggedIn();
$user->logout();
$task = new taskcontroller();
$tasks = $task->DisplayTasks();
$task->AddTasks();
$res = $task->getTaskCount();
$task->EditTasks();
$task->ArchiveTasks();
$task->DeleteTasks();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <title>DataWare</title>
</head>

<body class="bg-yellow-50">
    <!-- Component Start -->
    <header class="fixed right-0 top-0 left-80 bg-yellow-50 py-3 px-4 h-16">
        <div class="max-w-4xl mx-auto flex items-center justify-between">
            <div>
                <button type="button" class="flex items-center focus:outline-none rounded-lg text-gray-600 hover:text-yellow-600 focus:text-yellow-600 font-semibold p-2 border border-transparent hover:border-yellow-300 focus:border-yellow-300 transition">
                    <span class="inline-flex items-center justify-center w-6 h-6 text-gray-600 text-xs rounded bg-white transition mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </span>
                    <span class="text-sm">Archive</span>
                </button>
            </div>
            <div class="text-lg font-bold">Today's Plan</div>
            <div>
                <button type="button" class="flex items-center focus:outline-none rounded-lg text-gray-600 hover:text-yellow-600 focus:text-yellow-600 font-semibold p-2 border border-transparent hover:border-yellow-300 focus:border-yellow-300 transition">
                    <span class="text-sm">This week</span>
                    <span class="inline-flex items-center justify-center w-6 h-6 text-gray-600 text-xs rounded bg-white transition ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        </div>
    </header>
    <section class="bg-yellow-50 h-full">
        <div class="flex">
            <aside class="bg-white shadow-md w-80 h-screen overflow-y-auto">
                <div class="flex flex-col justify-between h-full">
                    <div class="flex-grow top-0">
                        <div class="px-4 py-6 text-center border-b">
                            <h1 class="text-xl font-bold leading-none"><span class="text-yellow-700">Task Manager</span> App</h1>
                        </div>
                        <div class="p-4">
                            <ul class="space-y-1">
                                <li>
                                    <a href="dashboard.php" class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                        </svg>Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="projects.php" class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                            <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                                        </svg>Projects
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="javascript:void(0)" class="flex items-center bg-yellow-200 rounded-xl font-bold text-sm text-yellow-900 py-3 px-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                                        </svg>Task list
                                    </a>
                                </li> -->

                            </ul>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="font-bold text-sm ml-2" href="dashboard.php?deconn">
                            <button type="button" class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
                                    <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                            </button>
                        </a> <a class="font-bold text-sm ml-2" href="dashboard.php?deconn">Logout</a>
                    </div>
                </div>
            </aside>

            <div class="flex flex-col justify-center items-center">
                <div class="flex justify-center w-full mt-20 ml-10 gap-10">
                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Create New Task
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5" action="" method="post">
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task title</label>
                                            <input type="text" name="nomta" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type task name" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task Description</label>
                                            <textarea name="descta" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write task description here"></textarea>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date debut</label>
                                            <input type="date" name="datedeb" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type task name" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date fin</label>
                                            <input type="date" name="datefin" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type task name" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose a state of the task</label>
                                            <select id="" name="statut" class="block w-full px-4 py-2 border rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:border-indigo-500 dark:bg-gray-800 dark:border-gray-700 dark:focus:bg-gray-700 dark:focus:border-indigo-500">
                                                <option value="to do" selected>To Do</option>
                                                <option value="doing">Doing</option>
                                                <option value="done">Done</option>
                                            </select>
                                        </div>

                                    </div>
                                    <button type="submit" name="addtask" class="inline-flex items-center bg-yellow-100 hover:bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        Add new task
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center bg-yellow-100 border-2 border-black hover:bg-yellow-200 focus:ring-2 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">

                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <a href="#" class="">
                            <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button">
                                Add task
                            </button>
                        </a>
                    </div>


                    <form>
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <div class="flex justify-between gap-4 m-auto">
                                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500" placeholder="Search Mockups, Logos..." required>

                                <button type="submit" class="inline-flex items-center bg-yellow-100 border-2 border-black hover:bg-yellow-200 focus:ring-2 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="flex items-center bg-yellow-100 border-2 border-black hover:bg-yellow-200 focus:ring-2 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">

                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <a href="#" class="">
                            <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button">
                                Add multiple
                            </button>
                        </a>
                    </div>

                </div>
                <div class="flex flex-grow px-10 mt-14 space-x-6 overflow-auto">

                    <div class="flex flex-col flex-shrink-0 w-72">
                        <div class="flex items-center flex-shrink-0 h-10 px-2">
                            <span class="block text-sm font-semibold">to do</span>
                            <span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30"><?php echo $res['todoCount'] ?></span>
                            <!-- <button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button> -->
                        </div>
                        <div class="flex flex-col pb-2 overflow-auto">
                            <?php foreach ($tasks as $t) :
                                if ($t->getStatut() === 'to do') {
                            ?>
                                    <div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                                        <button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full"> <?php echo $t->getNomta(); ?> </span>
                                        <h4 class="mt-3 text-sm font-medium">
                                            <?php echo $t->getDescta(); ?>
                                        </h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-1 leading-none"><?php echo date('d M', strtotime($t->getDatedeb())); ?></span>
                                            </div>

                                            <div class="relative flex items-center text-red-500">
                                                <svg class="relative w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM13 7h-2v5l4.25 2.55.75-1.23-3.5-2.07z" />
                                                </svg>
                                                <?php echo date('d M', strtotime($t->getDatefin())); ?>
                                                <span class="ml-1 leading-none"></span>
                                            </div>


                                            <div class="flex items-center gap-6">
                                                <a href="#" title="Edit" class="editTaskButton" data-task-Id="<?php echo $t->getIdta(); ?>" data-task-Nom="<?php echo $t->getNomta(); ?>" data-task-Desc="<?php echo $t->getDescta(); ?>" data-task-Datedeb="<?php echo $t->getDatedeb(); ?>" data-task-Datefin="<?php echo $t->getDatefin(); ?>" data-task-Statut="<?php echo $t->getStatut(); ?>" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                        <path opacity="1" fill="#2766d3" d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                                    </svg>
                                                </a>
                                                <a title="Archive" href="tasks.php?archivetask&idta=<?php echo $t->getIdta(); ?>&idpro=<?php echo $_GET['idpro']; ?>">
                                                <svg class='h-5 w-5 text-gray-500' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20' />
                                                </svg>
                                                </a>
                                                <a title="delete" href="tasks.php?deletetask&idta=<?php echo $t->getIdta(); ?>&idpro=<?php echo $_GET['idpro']; ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                        <path fill="#e6321e" d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                    </svg>
                                                </a>
                                              

                                            </div>
                                        </div>

                                    </div>
                            <?php
                                }
                            endforeach; ?>
                        </div>
                    </div>
                    <div class="flex flex-col flex-shrink-0 w-72">
                        <div class="flex items-center flex-shrink-0 h-10 px-2">
                            <span class="block text-sm font-semibold">Doing</span>
                            <span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30"><?php echo $res['doingCount'] ?></span>
                            <!-- <button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button> -->
                        </div>
                        <div class="flex flex-col pb-2 overflow-auto">
                            <?php foreach ($tasks as $t) :
                                if ($t->getStatut() === 'doing') {
                            ?>

                                    <div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                                        <button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full"><?php echo $t->getNomta(); ?></span>
                                        <h4 class="mt-3 text-sm font-medium"> <?php echo $t->getDescta(); ?>
                                        </h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-1 leading-none"><?php echo date('d M', strtotime($t->getDatedeb())); ?></span>
                                            </div>

                                            <div class="relative flex items-center text-red-500">
                                                <svg class="relative w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM13 7h-2v5l4.25 2.55.75-1.23-3.5-2.07z" />
                                                </svg>
                                                <?php echo date('d M', strtotime($t->getDatefin())); ?>
                                                <span class="ml-1 leading-none"></span>
                                            </div>
                                            <div class="flex items-center gap-6">
                                                <a href="#" title="Edit" class="editTaskButton" data-task-Id="<?php echo $t->getIdta(); ?>" data-task-Nom="<?php echo $t->getNomta(); ?>" data-task-Desc="<?php echo $t->getDescta(); ?>" data-task-Datedeb="<?php echo $t->getDatedeb(); ?>" data-task-Datefin="<?php echo $t->getDatefin(); ?>" data-task-Statut="<?php echo $t->getStatut(); ?>" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                        <path opacity="1" fill="#2766d3" d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                                    </svg>
                                                </a>
                                                <a title="Archive" href="tasks.php?archivetask&idta=<?php echo $t->getIdta(); ?>&idpro=<?php echo $_GET['idpro']; ?>">
                                                <svg class='h-5 w-5 text-gray-500' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20' />
                                                </svg>
                                                </a>
                                                <a title="delete" href="tasks.php?deletetask&idta=<?php echo $t->getIdta(); ?>&idpro=<?php echo $_GET['idpro']; ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                        <path fill="#e6321e" d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                            <?php
                                }
                            endforeach; ?>

                        </div>
                    </div>
                    <div class="flex flex-col flex-shrink-0 w-72">
                        <div class="flex items-center flex-shrink-0 h-10 px-2">
                            <span class="block text-sm font-semibold">Done</span>
                            <span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30"><?php echo $res['doneCount'] ?></span>
                            <!-- <button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button> -->
                        </div>
                        <div class="flex flex-col pb-2 overflow-auto">
                            <?php foreach ($tasks as $t) :
                                if ($t->getStatut() === 'done') {

                            ?>

                                    <div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                                        <button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full"><?php echo $t->getNomta(); ?></span>
                                        <h4 class="mt-3 text-sm font-medium"> <?php echo $t->getDescta(); ?>
                                        </h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-1 leading-none"><?php echo date('d M', strtotime($t->getDatedeb())); ?></span>
                                            </div>

                                            <div class="relative flex items-center text-red-500">
                                                <svg class="relative w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM13 7h-2v5l4.25 2.55.75-1.23-3.5-2.07z" />
                                                </svg>
                                                <?php echo date('d M', strtotime($t->getDatefin())); ?>
                                                <span class="ml-1 leading-none"></span>
                                            </div>
                                            <div class="flex items-center gap-6">
                                                <a href="#" title="Edit" class="editTaskButton" data-task-Id="<?php echo $t->getIdta(); ?>" data-task-Nom="<?php echo $t->getNomta(); ?>" data-task-Desc="<?php echo $t->getDescta(); ?>" data-task-Datedeb="<?php echo $t->getDatedeb(); ?>" data-task-Datefin="<?php echo $t->getDatefin(); ?>" data-task-Statut="<?php echo $t->getStatut(); ?>" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                        <path opacity="1" fill="#2766d3" d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                                    </svg>
                                                </a>
                                                <a title="Archive" href="tasks.php?archivetask&idta=<?php echo $t->getIdta(); ?>&idpro=<?php echo $_GET['idpro']; ?>">
                                                <svg class='h-5 w-5 text-gray-500' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20' />
                                                </svg>
                                                </a>
                                                <a title="delete" href="tasks.php?deletetask&idta=<?php echo $t->getIdta(); ?>&idpro=<?php echo $_GET['idpro']; ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                        <path fill="#e6321e" d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                            <?php
                                }
                            endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Main modal -->
            <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Update task
                            </h3>
                            <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <form class="space-y-4" action="" method="post">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <input type="hidden" name="idta" id="editTaskId">
                                    <div class="col-span-2">
                                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task title</label>
                                        <input type="text" name="nomta" id="editNomta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type task name" required="">
                                    </div>
                                    <div class="col-span-2">
                                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task Description</label>
                                        <textarea name="descta" id="editDescta" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write task description here"></textarea>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date debut</label>
                                        <input type="date" name="datedeb" id="editDatedeb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type task name" required="">
                                    </div>
                                    <div class="col-span-2">
                                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date fin</label>
                                        <input type="date" name="datefin" id="editDatefin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type task name" required="">
                                    </div>
                                    <div class="col-span-2">
                                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose a state of the task</label>
                                        <select id="editStatut" name="statut" class="block w-full px-4 py-2 border rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:border-indigo-500 dark:bg-gray-800 dark:border-gray-700 dark:focus:bg-gray-700 dark:focus:border-indigo-500">
                                            <option value="to do">To Do</option>
                                            <option value="doing">Doing</option>
                                            <option value="done">Done</option>
                                        </select>
                                    </div>

                                </div>

                                <button type="submit" name="edittask" class="inline-flex items-center bg-yellow-100 hover:bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    Update task
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        document.querySelectorAll('.editTaskButton').forEach(button => {
            button.addEventListener('click', function() {
                showEditTaskForm(button);
            });
        });


        function showEditTaskForm(button) {
            var editTaskForm = document.getElementById('authentication-modal');
            if (editTaskForm) {
                editTaskForm.querySelector('#editTaskId').value = button.dataset.taskId || '';
                editTaskForm.querySelector('#editNomta').value = button.dataset.taskNom || '';
                editTaskForm.querySelector('#editDescta').value = button.dataset.taskDesc || '';
                editTaskForm.querySelector('#editDatedeb').value = button.dataset.taskDatedeb || '';
                editTaskForm.querySelector('#editDatefin').value = button.dataset.taskDatefin || '';
                editTaskForm.querySelector('#editStatut').value = button.dataset.taskStatut || '';


            }
        }
    </script>
</body>

</html>