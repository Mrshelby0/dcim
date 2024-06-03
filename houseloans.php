<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Loan Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .tooltip {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 200px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%; /* Position above the icon */
            left: 50%;
            margin-left: -100px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-100 p-4">
    <nav class="bg-red-800 text-white flex justify-between">
        <img src="logo.jpg" class="w-20 mx-10 rounded-3xl" alt="Logo">
        <ul class="px-28 py-4 flex space-x-11 text-2xl justify-end items-center">
            <li class="cursor-pointer hover:text-black hover:underline"><a href="index.php">Home</a></li>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="cata.html">Catalog</a></li>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="about.html">About</a></li>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="contact.php">Contact-US</a></li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <div class="max-w-md mx-auto bg-white p-8 rounded-md border-red-500 shadow-md">
        <h2 class="text-2xl font-bold mb-4">Personal Information</h2>
        <form action="houseloans.php" method="POST">
            <div class="mb-4">
                <label for="your_name" class="block text-gray-700 font-bold mb-2">
                    Your Name
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your full legal name.</span>
                    </div>
                </label>
                <input type="text" id="your_name" name="your_name" class="w-full px-3 py-2 border hover:border-red-500 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="father_name" class="block text-gray-700 font-bold mb-2">
                    Father's Name
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your father's full name.</span>
                    </div>
                </label>
                <input type="text" id="father_name" name="father_name" class="w-full px-3 py-2 border hover:border-red-500 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="mother_name" class="block text-gray-700 font-bold mb-2">
                    Mother's Name
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your mother's full name.</span>
                    </div>
                </label>
                <input type="text" id="mother_name" name="mother_name" class="w-full px-3 py-2 hover:border-red-500 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="phone_number" class="block text-gray-700 font-bold mb-2">
                    Phone Number
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter a valid phone number.</span>
                    </div>
                </label>
                <input type="tel" id="phone_number" name="phone_number" class="w-full hover:border-red-500 px-3 py-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">
                    Email
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter a valid email address.</span>
                    </div>
                </label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 hover:border-red-500 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="address" class="block text-gray-700 font-bold mb-2">
                    Address
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your full residential address.</span>
                    </div>
                </label>
                <textarea id="address" name="address" class="w-full px-3 py-2 border hover:border-red-500 rounded-md" required></textarea>
            </div>
            <div class="mb-4">
                <label for="dob" class="block text-gray-700 font-bold mb-2">
                    Date of Birth
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your birth date.</span>
                    </div>
                </label>
                <input type="date" id="dob" name="dob" class="w-full px-3 py-2 hover:border-red-500 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="annual_income" class="block text-gray-700 font-bold mb-2">
                    Annual Income
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your annual income.</span>
                    </div>
                </label>
                <input type="text" id="annual_income" name="annual_income" class="w-full hover:border-red-500 px-3 py-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="marital_status" class="block text-gray-700 font-bold mb-2">
                    Marital Status
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please select your marital status.</span>
                    </div>
                </label>
                <select id="marital_status" name="marital_status" class="w-full px-3 py-2 hover:border-red-500 border rounded-md" required>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="occupation" class="block text-gray-700 font-bold mb-2">
                    Occupation
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your occupation.</span>
                    </div>
                </label>
                <input type="text" id="occupation" name="occupation" class="w-full hover:border-red-500 px-3 py-2 border rounded-md" required>
            </div>

            <h2 class="text-2xl font-bold mb-4">Financial Information</h2>
            <div class="mb-4">
                <label for="account_type" class="block text-gray-700 font-bold mb-2">
                    Account Type
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please select your account type.</span>
                    </div>
                </label>
                <select id="account_type" name="account_type" class="w-full px-3 py-2 hover:border-red-500 border rounded-md" required>
                    <option value="current">Current Account</option>
                    <option value="saving">Saving Account</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="account_number" class="block text-gray-700 font-bold mb-2">
                    Account Number
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your account number.</span>
                    </div>
                </label>
                <input type="text" id="account_number" name="account_number" class="w-full hover:border-red-500 px-3 py-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="ifsc_code" class="block text-gray-700 font-bold mb-2">
                    IFSC Code
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your bank's IFSC code.</span>
                    </div>
                </label>
                <input type="text" id="ifsc_code" name="ifsc_code" class="w-full px-3 py-2 hover:border-red-500 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="branch_number" class="block text-gray-700 font-bold mb-2">
                    Branch Number
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your bank's branch number.</span>
                    </div>
                </label>
                <input type="text" id="branch_number" name="branch_number" class="w-full px-3 hover:border-red-500 py-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="bank_name" class="block text-gray-700 font-bold mb-2">
                    Bank Name
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter the name of your bank.</span>
                    </div>
                </label>
                <input type="text" id="bank_name" name="bank_name" class="w-full px-3 hover:border-red-500 py-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="monthly_expense" class="block text-gray-700 font-bold mb-2">
                    Monthly Expenses (in total)
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter your total monthly expenses.</span>
                    </div>
                </label>
                <input type="number" id="monthly_expense" name="monthly_expense" class="w-full px-3 hover:border-red-500 py-2 border rounded-md" required>
            </div>
            <h2 class="text-2xl font-bold mb-4">Loan Details</h2>
            <div class="mb-4">
                <label for="amount" class="block text-gray-700 font-bold mb-2">
                    Loan Amount
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter the loan amount you wish to borrow.</span>
                    </div>
                </label>
                <input type="number" id="amount" name="amount" class="w-full px-3 hover:border-red-500 py-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="term" class="block text-gray-700 font-bold mb-2">
                    Loan Term (in years)
                    <div class="tooltip inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-8-6a6 6 0 100 12 6 6 0 000-12zM9 9v1h2V9H9zm0 2v3h2v-3H9z" clip-rule="evenodd" />
                        </svg>
                        <span class="tooltiptext">Please enter the loan term in years.</span>
                    </div>
                </label>
                <input type="number" id="term" name="term" class="w-full px-3 hover:border-red-500 py-2 border rounded-md" required>
            </div>
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
    <div class="text-center mt-8">
        <h3 class="text-xl font-semibold">Loan Calculator</h3>
        <p class="mb-4">Use the Loan Calculator to determine the right term and amount for your loan.</p>
        <a href="LOANCALCULATOR.HTML" class="inline-block">
            <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Calculator</button>
        </a>
    </div>
</body>
</html>
