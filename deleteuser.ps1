# Import active directory module for running AD cmdlets
Import-Module ActiveDirectory
  
# Store the data from NewUsersFinal.csv in the $ADUsers variable
$ADUsers = Import-Csv \\WIN-TI98N73EPQH\inetpub\wwwroot\delete.csv -Delimiter ","

# Define UPN
$UPN = "KitsuneCloud.nl"

# Loop through each row containing user details in the CSV file


foreach ($User in $ADUsers) {

    #Read user data from each field in each row and assign the data to a variable as below
    $username = $User.username
}

Remove-ADUser -Identity $username -Confirm:$false

Write-Host "The user account $username has been deleted." -ForegroundColor Cyan