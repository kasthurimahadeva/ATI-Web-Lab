function longestWord(str) {
    let Array = str.split(' ')
    let maxLength = 0
    let result = ''

    for (let i = 0; i < Array.length; i++) {
        if (Array[i].length > maxLength) {
            maxLength = Array[i].length
            result = Array[i].length
        }
    }

    return result
}
console.log(longestWord("Families are an integral part of one's life"));
