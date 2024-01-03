<?php
require_once('../controller/usercontroller.php');
require_once('../controller/taskcontroller.php');
require_once('../controller/procontroller.php');
$user = new usercontroller();
$user->login();
$user->isLoggedIn();
$user->logout();
$task = new taskcontroller();
$numtask = $task->TasksFinished();
$projet = new procontroller();
$numpro = $projet->ProjectsFinished();
$mosttask = $task->MostTasks();
$lesstask = $task->lessTasks();
$done = $task->DONE();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>DataWare</title>
</head>

<body class="relative bg-yellow-50 overflow-hidden max-h-screen">
  <header class="bg-yellow-50 md:fixed md:right-0 md:top-0 md:left-0 md:px-4 md:h-16">
    <div class="max-w-4xl mx-auto">
      <div class="flex items-center justify-between">

      </div>
    </div>
  </header>

  <aside class="md:fixed md:inset-y-0 md:left-0 md:bg-white md:shadow-md md:max-h-screen md:w-60">
    <div class="flex flex-col justify-between h-full">
      <div class="flex-grow">
        <div class="px-4 py-6 text-center border-b">
          <h1 class="text-xl font-bold leading-none"><span class="text-yellow-700">To Do List</span> Website</h1>
        </div>
        <div class="p-4">
          <ul class="space-y-1">
            <li>
              <a href="javascript:void(0)" class="flex items-center bg-yellow-200 rounded-xl font-bold text-sm text-yellow-900 py-3 px-4">
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

  <main class="md:ml-60 pt-16 overflow-y-auto max-h-screen ">
    <div class="px-6 py-8 max-w-4xl mx-auto">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-3xl p-8 mb-5 h-[500px]">
          <h1 class="text-3xl font-bold mb-10">Welcome to your account, We are so happy to see you</h1>

          <hr class="my-10">
          <div class="flex justify-center items-center">

            <h2 class="text-2xl font-bold mb-4">Statistiques</h2>
          </div>
          <div class="grid">
            <div class="flex justify-center items-center">

              <div class="grid grid-cols-2 gap-4">
              <div class="col-span-2 md:col-span-1">
                  <div class="p-4 bg-green-100 rounded-xl">
                    <div class="font-bold text-3xl text-gray-800 leading-none">Good day, <?php echo $_SESSION['nom'] ?></div>
                    <div class="mt-5">
                      <a href="projects.php">
                        <!-- <button type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                          View projects
                        </button> -->
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-span-2 md:col-span-1">
                  <div class="p-4 bg-purple-100 rounded-xl text-gray-800">

                    <div class="font-bold text-2xl leading-none"><?php echo $numtask ?> Tasks</div>
                    <div class="mt-2">Tasks finished in all projects</div>
                  </div>
                </div>
                <div class="col-span-2 md:col-span-1">
                  <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                    <div class="font-bold text-xl leading-none">Your projects</div>
                    <div class="mt-2"><?php echo $numpro ?> Projects</div>
                  </div>
                </div>

                <div class="col-span-2 md:col-span-1">
                  <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                    <div class="font-bold text-xl leading-none">Project with the most tasks</div>
                    <div class="mt-2"><?php echo $mosttask ?></div>
                  </div>
                </div>

                <div class="col-span-2 md:col-span-1">
                  <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                    <div class="font-bold text-xl leading-none">The project with the less tasks to do</div>
                    <div class="mt-2"><?php echo $lesstask ?></div>
                  </div>
                </div>

                <div class="col-span-2 md:col-span-1">
                  <div class="p-4 bg-green-100 rounded-xl text-gray-800">
                    <div class="font-bold text-xl leading-none">The project with all tasks done</div>
                    <div class="mt-2"><?php echo $done ?></div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>