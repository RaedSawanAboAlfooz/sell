/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
// const express = require('express');
// var http =require('http');
// const cors = require('cors');
// var mysql      = require('mysql');
//  const { comment } = require('postcss');
// const Client = require('socket.io/lib/client');
// var sql = mysql.createConnection({
//   host     : 'localhost',
//   user     : 'root',
//   password : '',
//   database : 'Sell'
// });
// const app = express();
// const port = process.env.PORT || 3000 ;
// var server =http.createServer(app);
// var clientsConnectNow=[];
// var clients= {};
// var io =require('socket.io')(server,{
//     cors: {
//         origin:"*"
//     }
// });
// app .use(express.json());
// app.use(cors());
// io.on ('connection' ,function (client){
//     console.log("new user " + client.id);
//     client.on('room', room => {
//         console.log('reooom ');
//         client.join(room.post_id);
//     });
//     client.on('reply' , comment=>{
//         var q;
//         console.log('reply new == :)');
//         console.log( comment);
//         q="INSERT INTO `child_comments` (`body`,`image_user_id`,`user_name`,`comment_id`,`user_id`)  VALUES ("+"'"+comment.comment+"','"+comment.image_user_id+"','"+comment.user_name+"','"+comment.comment_id+"','"+comment.user_id+"'"+");";
//         sql.query(q);
//         io.sockets.in(comment.post_id).emit('reply' ,comment);
//     });
//     client.on('comment' , comment=>{
//         var q;
//         var id;
//        q="INSERT INTO `comments` (`body`,`user_id`,`post_id`,`image_user_id`)  VALUES ("+"'"+comment.comment+"','"+comment.user_id+"','"+comment.post_id+"','"+comment.image_id +"'"+");";
//        console.log('quiry in comment ::) ');
//        console.log(q);
//        sql.query(q,(err, result)=>{
//         id=result.insertId;
//         var newComment ={
//             'id':id,
//             'post_id':comment.post_id,
//             'user_id':comment.user_id,
//             'comment':comment.comment,
//             'image_id':comment.image_id,
//             'image_name':(comment.image_name!='null')?comment.image_name:'assets/imags/profile.png',
//             'name':comment.name
//         };
//         console.log( 'new comment  ======== ');
//         console.log(newComment);
//        io.sockets.in(comment.post_id).emit('comment' ,newComment);
//       });
//     });
//     client.on('disconnect',function ( ){});
// });
// server.listen(port ,()=>{
//     console.log("server is Started ");
// });
/******/ })()
;