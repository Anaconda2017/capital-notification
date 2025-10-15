<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic 2D Flowchart</title>
    <style>
        .flowchart-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            position: relative;
            padding: 20px;
        }

        .step {
            border: 1px solid #000;
            padding: 15px;
            min-width:250px;
            margin-top: 10px;
            margin-bottom: 25px;
            text-align: center;
            background-color: #f0f0f0;
            position: relative;
        }

        .choices-container {
            display: flex;
            justify-content: center;
            gap: 10px; /* مسافة بين الأزرار */
            margin-top: 10px;
        }

        .choice-button {
            width: 50px;
            height: 30px;

            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .choice-button:hover {
            background-color: #45a049;
        }

        .back-button, .restart-button {
            
            width: 50px;
            height: 30px;
            background-color: #FF6347;
            color: white;
            border: none;
            cursor: pointer;
        }

        .back-button:hover, .restart-button:hover {
            background-color: #FF4500;
        }

        .line {
            width: 2px;
            background-color: #000;
            height: 30px;
            margin: 10px auto;
        }
    </style>
</head>
<body>

    <button class="restart-button" onclick="restartFlowchart()">Reset</button>

    <div class="flowchart-container" id="flowchart-container">
        <!-- سيتم إضافة الخطوات هنا ديناميكيًا -->
    </div>

    <script>
        const chartData = @json($firstQuestion);  // تحميل البيانات من Blade

        let allSteps = [];
        let currentStepIndex = 0;

        function restartFlowchart() {
            document.getElementById("flowchart-container").innerHTML = '';
            allSteps = [];
            currentStepIndex = 0;
            renderStep(chartData);
        }

        function renderStep(step) {
            const container = document.getElementById("flowchart-container");

            const stepWrapper = document.createElement('div');
            stepWrapper.classList.add('step-wrapper');

            const questionDiv = document.createElement('div');
            questionDiv.classList.add('step');
            questionDiv.innerText = step.text;

            stepWrapper.appendChild(questionDiv);

            // إنشاء الحاوية الأفقية للأزرار
            const choicesContainer = document.createElement('div');
            choicesContainer.classList.add('choices-container');

            step.choices.forEach(choice => {
                const button = document.createElement('button');
                button.classList.add('choice-button');
                button.innerText = choice.text;
                button.onclick = function () {
                    fetchNextQuestion(choice.id);
                };
                choicesContainer.appendChild(button);
            });

            stepWrapper.appendChild(choicesContainer);

            if (currentStepIndex > 0) {
                const backButton = document.createElement('button');
                backButton.classList.add('back-button');
                backButton.innerText = "back";
                backButton.onclick = function () {
                    goBack();
                };
                choicesContainer.appendChild(backButton);
            }

            container.appendChild(stepWrapper);
            allSteps.push(stepWrapper);
            currentStepIndex++;
        }

        async function fetchNextQuestion(choiceId) {
            try {
                const response = await fetch(`https://digitalbondmena.com/mukalafoon/questions/next/${choiceId}`);
                const data = await response.json();

                while (allSteps.length > currentStepIndex) {
                    const lastStep = allSteps.pop();
                    lastStep.remove();
                }

                renderStep(data);
            } catch (error) {
                console.error('Error fetching next question:', error);
            }
        }

        function goBack() {
            if (currentStepIndex > 1) {
                const lastStep = allSteps.pop();
                lastStep.remove();
                currentStepIndex--;
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            renderStep(chartData);
        });
    </script>

</body>
</html>
