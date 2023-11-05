# lab2
My account: https://www.codingame.com/profile/d4839bcfe9c1dfdcf5e9bef84bda0dc19191575
FREQUENCY-BASED DECRYPTION
Information on the shift cipher : https://en.wikipedia.org/wiki/Caesar_cipher

Alice has been working in a secret intelligence bureau for several years. She's an expert in cryptography and often tasked with decoding intercepted messages.

One day, Alice receives a strange message on her desk. It's a string of characters encoded with a shift cipher, but no key has been provided to decode it. Alice knows she needs to decode the message quickly to uncover the enemy's plans.

Fortunately, Alice has a reliable method for decoding messages without a key. She uses frequency analysis of letters to determine the shift used in the encoding process.

However, Alice knows that the shift is only applied to alphabetical characters. Non-alphabetical characters, such as numbers and symbols, are not affected by the shift.

By comparing the frequency of letters in the encoded message with those in the English language, Alice eventually finds the shift used in the encoding process.

In addition, Alice wants to preserve the characteristics of the original text, including capitalization. This means the program must maintain the case of the original text when generating the decoded message in plaintext.

Now, your task is to help Alice by writing a program that takes the encoded string as input, uses letter frequency analysis to decode the message by applying the shift only to alphabetical characters, and generates the decoded message in plaintext while preserving the case of the original text.
