<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .blackjack-game {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .hand {
        margin: 10px 0;
        padding: 10px;
        background-color: #f9f9f9;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
    }

    #controls {
        text-align: center;
    }

    button {
        padding: 10px 20px;
        margin: 0 5px;
        font-size: 16px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    #message {
        margin-top: 10px;
        padding: 10px;
        text-align: center;
        color: #333;
        background-color: #f9f9f9;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
    }
</style>
<body>
    <div class="blackjack-game">
        <h1>Blackjack</h1>
        <div id="game">
            <div id="player-hand" class="hand"></div>
            <div id="dealer-hand" class="hand"></div>
            <div id="controls">
                <input type="number" id="bet-amount" placeholder="Bet Amount" min="10" required>
                <button id="hit">Hit</button>
                <button id="stand">Stand</button>
                <button id="double">Double</button>
                <button id="new-game">New Game</button>
            </div>
            <div id="message"></div>
            <div id="currency">Currency: $100</div>
        </div>
    </div>

    <script>
        let deck, playerHand, dealerHand, currency = 100, betAmount;

        function createDeck() {
            const suits = ['hearts', 'diamonds', 'clubs', 'spades'];
            const values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
            deck = [];
            for (let suit of suits) {
                for (let value of values) {
                    deck.push({ suit, value });
                }
            }
            deck = deck.sort(() => Math.random() - 0.5);
        }

        function startGame() {
            createDeck();
            playerHand = [deck.pop(), deck.pop()];
            dealerHand = [deck.pop(), deck.pop()];
            updateHands();
            document.getElementById('message').textContent = '';
            document.getElementById('currency').textContent = `Currency: $${currency}`;
        }

        function updateHands() {
            document.getElementById('player-hand').textContent = `Player: ${handValue(playerHand)} - ${handToString(playerHand)}`;
            document.getElementById('dealer-hand').textContent = `Dealer: ${handValue(dealerHand)} - ${handToString(dealerHand)}`;
        }

        function handValue(hand) {
            let value = 0;
            let aces = 0;
            for (let card of hand) {
                if (card.value === 'A') {
                    aces++;
                    value += 11;
                } else if (['K', 'Q', 'J'].includes(card.value)) {
                    value += 10;
                } else {
                    value += parseInt(card.value);
                }
            }
            while (value > 21 && aces > 0) {
                value -= 10;
                aces--;
            }
            return value;
        }

        function handToString(hand) {
            return hand.map(card => `${card.value} of ${card.suit}`).join(', ');
        }

        function hit() {
            playerHand.push(deck.pop());
            updateHands();
            if (handValue(playerHand) > 21) {
                document.getElementById('message').textContent = 'Player busts! Dealer wins.';
                currency -= betAmount;
                document.getElementById('currency').textContent = `Currency: $${currency}`;
            }
        }

        function stand() {
            while (handValue(dealerHand) < 17) {
                dealerHand.push(deck.pop());
            }
            updateHands();
            const playerValue = handValue(playerHand);
            const dealerValue = handValue(dealerHand);
            if (dealerValue > 21 || playerValue > dealerValue) {
                document.getElementById('message').textContent = 'Player wins!';
                currency += betAmount;
            } else if (playerValue < dealerValue) {
                document.getElementById('message').textContent = 'Dealer wins!';
                currency -= betAmount;
            } else {
                document.getElementById('message').textContent = 'Push!';
            }
            document.getElementById('currency').textContent = `Currency: $${currency}`;
        }

        function double() {
            betAmount *= 2;
            hit();
            if (handValue(playerHand) <= 21) {
                stand();
            }
        }

        document.getElementById('hit').addEventListener('click', hit);
        document.getElementById('stand').addEventListener('click', stand);
        document.getElementById('double').addEventListener('click', double);
        document.getElementById('new-game').addEventListener('click', () => {
            betAmount = parseInt(document.getElementById('bet-amount').value);
            if (isNaN(betAmount) || betAmount < 10 || betAmount > currency) {
                document.getElementById('message').textContent = 'Invalid bet amount.';
                return;
            }
            startGame();
        });

        startGame();
    </script>
</body>
</html>