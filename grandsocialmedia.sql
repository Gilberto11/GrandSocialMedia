CREATE TABLE 'users' (
  'id' int(11) NOT NULL,
  'first_name' varchar(25) NOT NULL,
  'last_name' varchar(25) NOT NULL,
  'username' varchar(100) NOT NULL,
  'email' varchar(100) NOT NULL,
  'password' varchar(255) NOT NULL,
  'signup_date' date NOT NULL,
  'profile_pic' varchar(255) NOT NULL,
  'num_posts' int(11) NOT NULL,
  'num_likes' int(11) NOT NULL,
  'user_closed' varchar(3) NOT NULL,
  'friend_array' text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;