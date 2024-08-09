<div>
    <div class="full-page-container">
        <div class="header">
            <h1>Contact Us</h1>
        </div>

        <div class="content">
            <p>
                Have questions, suggestions, or just want to get in touch? We'd love to hear from you!
            </p>

            <p>
                You can contact us via email at spa@gmail.com.
            </p>

            <p>
                Alternatively, you can use the contact form below to send us a message:

             <div>
              <form wire:submit.prevent="submitForm">
                <label for="name">Name:</label>
                <input wire:model="name" type="text" id="name">

                @error('name') <span>{{ $message }}</span> @enderror

                <label for="email">Email:</label>
                <input wire:model="email" type="email" id="email">

                @error('email') <span>{{ $message }}</span> @enderror

                <label for="message">Message:</label>
                <textarea wire:model="message" id="message"></textarea>

                @error('message') <span>{{ $message }}</span> @enderror

                <button type="submit">Submit</button>
              </form>
             </div>
            </p>


        </div>
    </div>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .full-page-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .header {
            background-color: #3490dc; 
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .content {
            padding: 20px;
            text-align: justify;
            line-height: 1.6;
            flex-grow: 1;
        }
    </style>
</div>
