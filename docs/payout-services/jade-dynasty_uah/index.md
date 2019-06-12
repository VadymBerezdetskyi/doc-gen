## General 
**Code:** `jade-dynasty_uah`  
**Method:** `jade-dynasty`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `10`  to `4999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^(\w|\.| |\-|\+|@){1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^(\w|\.| |\-|\+|@){1,128}$/`  
Required: `1`  
Label:  
: [en] Game account  
: [uk] Ігровий аккаунт  
: [ru] Игровой аккаунт  
Hint:  
: [en] Enter game account  
: [uk] Введіть игровой аккаунт  
: [ru] Введите игровой аккаунт  
## JSON Object 
```json
 {"code":"jade-dynasty_uah","method":"jade-dynasty","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Game account","uk":"\u0406\u0433\u0440\u043e\u0432\u0438\u0439 \u0430\u043a\u043a\u0430\u0443\u043d\u0442","ru":"\u0418\u0433\u0440\u043e\u0432\u043e\u0439 \u0430\u043a\u043a\u0430\u0443\u043d\u0442"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter game account","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0438\u0433\u0440\u043e\u0432\u043e\u0439 \u0430\u043a\u043a\u0430\u0443\u043d\u0442","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u0433\u0440\u043e\u0432\u043e\u0439 \u0430\u043a\u043a\u0430\u0443\u043d\u0442"},"example":"xahtep86"}],"amount_min":10,"amount_max":4999}```  
