# Password hashing Class

you can use the class like this

- $hash = new password();
- $hash->Salt(20); or just leave number empty and using 20 length as default
- $hash->hash();

its returning an boolean

if($hash->VerifyHash()){

 //do something
 
}

