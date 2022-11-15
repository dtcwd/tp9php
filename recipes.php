<?


//TP9 PHP

$recipes = array();

$recipes["lemonBars"] = array();
$recipes["lemonBars"]["ingredients"] = array();
$recipes["lemonBars"]["equipment"] = array();
$recipes["lemonBars"]["directions"] = array();

$recipes["lemonBars"]["ingredients"][] = "1 cup butter, softened";
$recipes["lemonBars"]["ingredients"][] = "½ cup white sugar";
$recipes["lemonBars"]["ingredients"][] = "2 cups all-purpose flour";
$recipes["lemonBars"]["ingredients"][] = "4 eggs";
$recipes["lemonBars"]["ingredients"][] = "1 ½ cups white sugar";
$recipes["lemonBars"]["ingredients"][] = "¼ cup all-purpose flour";
$recipes["lemonBars"]["ingredients"][] = "2 lemons, juiced";

$recipes["lemonBars"]["equipment"][] = "Oven";
$recipes["lemonBars"]["equipment"][] = "13 x 9 inch pan";
$recipes["lemonBars"]["equipment"][] = "Measuring cups";
$recipes["lemonBars"]["equipment"][] = "Juicer";
$recipes["lemonBars"]["equipment"][] = "2 mixing bowls";
$recipes["lemonBars"]["equipment"][] = "Whisker";

$recipes["lemonBars"]["directions"][] = "Preheat oven to 350 degrees F (175 degrees C).";
$recipes["lemonBars"]["directions"][] = "In a medium bowl, blend together softened butter, 2 cups flour and 1/2 cup sugar. Press into the bottom of an ungreased 9x13 inch pan.";
$recipes["lemonBars"]["directions"][] = "Bake for 15 to 20 minutes in the preheated oven, or until firm and golden. In another bowl, whisk together the remaining 1 1/2 cups sugar and 1/4 cup flour. Whisk in the eggs and lemon juice. Pour over the baked crust.";
$recipes["lemonBars"]["directions"][] = "Bake for an additional 20 minutes in the preheated oven. The bars will firm up as they cool. For a festive tray, make another pan using limes instead of lemons and adding a drop of green food coloring
          to give a very pale green. After both pans have cooled, cut into uniform 2 inch squares and arrange in a checker board fashion.";


$recipes["bread"] = array();
$recipes["bread"]["ingredients"] = array();
$recipes["bread"]["equipment"] = array();
$recipes["bread"]["directions"] = array();

$recipes["bread"]["ingredients"][] = "1 1/4 cups white sugar";
$recipes["bread"]["ingredients"][] = "1 cup brown sugar";
$recipes["bread"]["ingredients"][] = "2 1/2 teaspoons ground cinnamon";
$recipes["bread"]["ingredients"][] = "3 (7.5 ounce) packages refridgerated biscuit dough";
$recipes["bread"]["ingredients"][] = "1/2 cup of butter, melted";
$recipes["bread"]["ingredients"][] = "40 maraschino cherries";

$recipes["bread"]["equipment"][] = "Oven";
$recipes["bread"]["equipment"][] = "Kabob sticks";
$recipes["bread"]["equipment"][] = "Baking sheets";
$recipes["bread"]["equipment"][] = "Parchment paper";
$recipes["bread"]["equipment"][] = "Cooling racks";
$recipes["bread"]["equipment"][] = "Resealable bag";
$recipes["bread"]["equipment"][] = "Measuring cups";
$recipes["bread"]["equipment"][] = "Can opener, probably";
$recipes["bread"]["equipment"][] = "Knife";

$recipes["bread"]["directions"][] = "Preheat oven to 350 degrees F (175 degrees C). Line both of the three baking sheets and three cooling racks with parchment paper.";
$recipes["bread"]["directions"][] = "Mix together the white sugar, brown sugar, and cinnamon in a large resealable bag.";
$recipes["bread"]["directions"][] = "Cut each biscuit into four pieces. Dip each biscuit piece in melted butter; transfer to sugar mixture. Gently shake bag to coat biscuits in sugar mixture.";
$recipes["bread"]["directions"][] = "Thread three biscuit pieces onto a skewer; add a maraschino cherry. Repeat with three more biscuit pieces, ending with a maraschino cherry. Repeat with remaining ingredients to make 20 kabobs. Arrange kabobs on the prepared baking sheets.";
$recipes["bread"]["directions"][] = "Bake in the preheated oven until biscuits are cooked through, about 15 minutes. Flip kabobs halfway through cooking.";
$recipes["bread"]["directions"][] = "Transfer kabobs to prepared wire racks and let cool.";


$recipes["salmon"] = array();
$recipes["salmon"]["ingredients"] = array();
$recipes["salmon"]["equipment"] = array();
$recipes["salmon"]["directions"] = array();

$recipes["salmon"]["ingredients"][] = "6 tablespoons panko bread crumbs";
$recipes["salmon"]["ingredients"][] = "1 tablespoon grated Parmesan cheese";
$recipes["salmon"]["ingredients"][] = "½ teaspoon lemon pepper";
$recipes["salmon"]["ingredients"][] = "½ teaspoon dried thyme";
$recipes["salmon"]["ingredients"][] = "½ teaspoon dried parsley";
$recipes["salmon"]["ingredients"][] = "⅛ teaspoon granulated garlic";
$recipes["salmon"]["ingredients"][] = "⅛ teaspoon lemon zest";
$recipes["salmon"]["ingredients"][] = "2 (4 ounce) salmon fillets";
$recipes["salmon"]["ingredients"][] = "1 tablespoon butter, melted";

$recipes["salmon"]["equipment"][] = "Oven";
$recipes["salmon"]["equipment"][] = "Baking sheet";
$recipes["salmon"]["equipment"][] = "Aluminium Foil";
$recipes["salmon"]["equipment"][] = "Bowl";

$recipes["salmon"]["directions"][] = "Preheat oven to 375 degrees F (190 degrees C). Line a baking sheet with aluminium foil.";
$recipes["salmon"]["directions"][] = "Combine panko bread crumbs, Parmesan cheese, lemon pepper, thyme, parsley, granulated garlic, and lemon zest in a bowl. Arrange salmon on the prepared baking sheet and brush with melted butter. Sprinkle bread crumb mixture evenly over salmon fillets.";
$recipes["salmon"]["directions"][] = "Bake in the preheated oven until salmon flakes easily with a fork, 20 to 25 minutes";



$requestedID = $_GET["recipeID"];
$requestedID = htmlspecialchars($requestedID);
$requestedID = filter_var($requestedID, FILTER_SANITIZE_STRING);

$requestedList = $_GET["recipeList"];
$requestedList = htmlspecialchars($requestedList);
$requestedList = filter_var($requestedList, FILTER_SANITIZE_STRING);

$requestedOutput = $recipes[$requestedID][$requestedList];

$requestedJSON = "0";

if ($requestedOutput != null) {
  $requestedJSON = json_encode($requestedOutput);
}

echo $requestedJSON;



/* TP8 Recipe Loader */
/*
// gets values for the passed recipeName and recipeList
$name = $_GET["recipeName"];
$list = $_GET["recipeList"];

//testing for Lemon Bars recipe name
if ($name == "Lemon Bars") {
  // if found and list names are founds, following files will be returned
  if ($list == "ingredients") {
   include "ingredients.html";
  }
  
  elseif ($list == "equipment") {
    include "equipment.html";
  }
  
  elseif ($list == "directions") {
    include "directions.html";
  }
  
  else {
    echo "1";
  }
  
  // tests for this recipe name if the first was not found
} elseif ($name == "Monkey Bread Kabobs") {
  
  if ($list == "ingredients") {
   include "bread-ingredients.html";
  }
  
  elseif ($list == "equipment") {
    include "bread-equipment.html";
  }
  
  elseif ($list == "directions") {
    include "bread-directions.html";
  }
  
  else {
    echo "1";
  }  
} 
//tests for this recipe name if the first and second were not found
  elseif ($name == "Lemon Panko Crusted Salmon") {
  
  if ($list == "ingredients") {
   include "salmon-ingredients.html";
  }
  
  elseif ($list == "equipment") {
    include "salmon-equipment.html";
  }
  
  elseif ($list == "directions") {
    include "salmon-directions.html";
  }
  
  else {
    echo "1";
  }
  
}
// returns a zero if the recipeName does not match any of the three recipes
else {
  echo "0";
}
*/