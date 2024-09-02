<div class="max-w-md mx-auto mt-10">
    <form action="php/views/bmi_result.php" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-6">BMI Calculator</h2>

        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
        <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

        <label for="age" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Age:</label>
        <input type="number" name="age" id="age" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

        <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Gender:</label>
        <select name="gender" id="gender" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="height" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Height (in meters):</label>
        <input type="number" step="0.01" name="height" id="height" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

        <label for="weight" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Weight (in kg):</label>
        <input type="number" step="0.1" name="weight" id="weight" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Calculate BMI</button>
    </form>
</div>
