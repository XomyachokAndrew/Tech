document.getElementById('message_form').addEventListener('submit', async function (event) {
    event.preventDefault();

    const formData = new FormData(event.target);
    try {
        const response = await fetch('http://tech/main/indexinsert', {
            method: 'POST',
            body: formData
        });
        const data = await response.json();

        let messages = document.getElementById('messages');

        let message = document.createElement('article');
        message.className = 'message';
        message.innerHTML = `
            <div class="top">
                <h2>${data.full_name}</h2>
                <h3>${data.email}</h3>
            </div>
            <div>
                ${data.message}
            </div>`;

        messages.prepend(message);
    } catch (error) {
        console.error('Ошибка:', error);
    }
});
