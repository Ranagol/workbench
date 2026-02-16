<?php



















// Create a collection of user objects
$users = new Collection([
  new \stdClass(['id' => 2, 'name' => 'Jane Smith', 'age' => 25, 'profession' => 'Designer']),
  new \stdClass(['id' => 1, 'name' => 'John Doe', 'age' => 30, 'profession' => 'Developer']),
  new \stdClass(['id' => 3, 'name' => 'Alice Johnson', 'age' => 35, 'profession' => 'Manager']),
]);

//create a new array, that will contain all users older than 30 year
$filteredUsers = $users->filter(function ($user) {
  return $user->age > 30;
});

//create a new array, for every existing user, and this should contain only the users name.
$formattedNames = $users->map(function ($user) {
  return $user->first_name . ' ' . $user->last_name;
});

//sort users by their age
$sortedUsers = $users->sortBy(function ($user) {
  return $user->age;
});

//calculate the average age of users in a collection using a closure with the avg method.
$averageAge = $users->avg(function ($user) {
  return $user->age;
});

//conditional operation
$users->each(function ($user) {
  if ($user->is_active) {
      // Perform an action for active users
  }
});

//search for one active user (this is not filtering! We search for the first active user)
$activeUser = $users->first(function ($user) {
  return $user->is_active;
});
