// 変数numの0〜15までのランダムな数字を代入
num = Math.floor(Math.random() * 16);

// 変数numの値が3と5の倍数の場合。「3と5の倍数です」と代入する
if (num % 3 === 0 && num % 5 === 0) {
  console.log('3と5の倍数です');
}

// 変数numの値が5の倍数の場合。「5の倍数です」と代入する
else if (num % 3 === 0) {
  console.log('3の倍数です');
}

// 変数numの値が5の倍数の場合。「5の倍数です」と代入する
else if (num % 5 === 0) {
  console.log('5の倍数です');
}

// それ以外は「num」と代入する
else {
  console.log('num');
}
