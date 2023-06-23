<?php
/*
 * Copyright Alexander Beider and Stephen P. Morse, 2008
 * Copyright Olegs Capligins, 2013-2016
 *
 * This is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * It is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public
 * License for more details.
 *
 * You should have received a copy of the GNU General Public License.
 * If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Includes both Spanish (Castillian) & Catalan
return [

    // CONSONANTS
    ["ñ","","","(n|nj)"],
    ["ny","","","nj"], // Catalan
    ["ç","","","s"], // Catalan

    ["ig","[aeiou]","","(tS|ig)"], // tS is Catalan
    ["ix","[aeiou]","","S"], // Catalan
    ["tx","","","tS"], // Catalan
    ["tj","","$","tS"], // Catalan
    ["tj","","","dZ"], // Catalan
    ["tg","","","(tg|dZ)"], // dZ is Catalan
    ["ch","","","(tS|dZ)"], // dZ is typical for Argentina
    ["bh","","","b"], // translit. from Arabic
    ["h","[dgt]","",""], // translit. from Arabic
    ["h","","$",""], // foreign
    // array("ll","","","(l|Z)"), // Z is typical for Argentina, only Ashkenazic
    ["m","","[bpvf]","(m|n)"],
    ["c","","[ei]","s"],
    // array("c","","[aou]","(k|C)"),
    ["gu","","[ei]","(g|gv)"], // "gv" because "u" can actually be "ü"
    ["g","","[ei]","(x|g|dZ)"],  // "g" only for foreign words; dZ is Catalan
    ["qu","","","k"],

    ["uo","","","(vo|o)"],
    ["u","","[aei]","v"],

    // SPECIAL VOWELS
    ["ü","","","v"],
    ["á","","","a"],
    ["é","","","e"],
    ["í","","","i"],
    ["ó","","","o"],
    ["ú","","","u"],
    ["à","","","a"],  // Catalan
    ["è","","","e"], // Catalan
    ["ò","","","o"],  // Catalan

    // LATIN ALPHABET
    ["a","","","a"],
    ["b","","","B"],
    ["c","","","k"],
    ["d","","","d"],
    ["e","","","e"],
    ["f","","","f"],
    ["g","","","g"],
    ["h","","","h"],
    ["i","","","i"],
    ["j","","","(x|Z)"], // Z is Catalan
    ["k","","","k"],
    ["l","","","l"],
    ["m","","","m"],
    ["n","","","n"],
    ["o","","","o"],
    ["p","","","p"],
    ["q","","","k"],
    ["r","","","r"],
    ["s","","","s"],
    ["t","","","t"],
    ["u","","","u"],
    ["v","","","V"],
    ["w","","","v"], // foreign words
    ["x","","","(ks|gz|S)"], // ks is Spanish, all are Catalan
    ["y","","","(i|j)"],
    ["z","","","(z|s)"], // as "c" befoire "e" or "i", in Spain it is like unvoiced English "th"

    ["rulesspanish"]

];
