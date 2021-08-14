import 'dart:html';

import 'package:flutter/material.dart';
import 'DiceScreen.dart';
import 'WelcomeScreen.dart';
import 'cardScreen.dart';
import 'loginScreen.dart';
import 'homeScreen.dart';
import 'jacknpoyScreen.dart';
import 'coinScreen.dart';
import 'draggableScroll.dart';
import 'scrollableScreen.dart';
import 'listWheelScrollScreen.dart';

class HomeScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Home Page'),
      ),
      body: SafeArea(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.center,
          children: <Widget>[
            Row(
              children: <Widget>[
                Column(
                  children: <Widget>[
                    Container(
                      padding: EdgeInsets.all(20.0),
                      child: Image.asset(
                        'images/diceimage.gif',
                        height: 200,
                        width: 200.0,
                        fit: BoxFit.fitWidth,
                      ),
                    ),
                    SizedBox(
                      height: 15.0,
                      child: Text('Dice Game'),
                    ),
                  ],
                ),
                Column(
                  children: <Widget>[
                    Container(
                      padding: EdgeInsets.all(20.0),
                      child: Image.asset(
                        'images/jackenpoy.gif',
                        height: 200,
                        width: 200.0,
                        fit: BoxFit.fitWidth,
                      ),
                    ),
                    SizedBox(
                      height: 15.0,
                      child: Text('Jack N\' Poy'),
                    ),
                  ],
                ),
              ],
            ),
            Row(
              children: <Widget>[
                Column(
                  children: <Widget>[
                    Container(
                      padding: EdgeInsets.all(20.0),
                      child: Image.asset(
                        'images/karakrus.gif',
                        height: 200,
                        width: 200.0,
                        fit: BoxFit.fitWidth,
                      ),
                    ),
                    SizedBox(
                      height: 15.0,
                      child: Text('Kara N\' Krus'),
                    ),
                  ],
                ),
                Column(
                  children: <Widget>[
                    Container(
                      padding: EdgeInsets.all(20.0),
                      child: Image.asset(
                        'images/High-Low.gif',
                        height: 200,
                        width: 200.0,
                        fit: BoxFit.fitWidth,
                      ),
                    ),
                    SizedBox(
                      height: 15.0,
                      child: Text('High And Low Cards'),
                    ),
                  ],
                ),
              ],
            ),
          ],
        ),
      ),
      drawer: Drawer(
        child: ListView(
          //padding: EdgeInsets.zero,

          children: <Widget>[
            UserAccountsDrawerHeader(
              currentAccountPicture: Center(
                child: CircleAvatar(
                  backgroundImage: AssetImage('assets/images/coper-image1.jpg'),
                  radius: 50,
                ),
              ),
              accountName: Text('Juel D. Coper', textAlign: TextAlign.center),
              accountEmail: Text(
                'juel.coper@citycollegeoftagaytay.edu.ph',
                textAlign: TextAlign.center,
              ),
            ),
            ListTile(
              //  leading: Icon(Icons.home),
              title: Text("Jack N' Poy"),
              onTap: () {
                Navigator.push(context, MaterialPageRoute(builder: (_) {
                  return JacknPoyApp();
                }));
              },
            ),
            SizedBox(
              child: Divider(
                color: Colors.grey,
              ),
            ),
            ListTile(
              //leading: Icon(Icons.settings),
              title: Text("Kara Krus"),
              onTap: () {
                Navigator.push(context, MaterialPageRoute(builder: (_) {
                  return CoinApp();
                }));
              },
            ),
            SizedBox(
              child: Divider(
                color: Colors.grey,
              ),
            ),
            ListTile(
              //leading: Icon(Icons.contacts),
              title: Text("High and Low"),
              onTap: () {
                Navigator.push(context, MaterialPageRoute(builder: (_) {
                  return CardApp();
                }));
              },
            ),
            SizedBox(
              child: Divider(
                color: Colors.grey,
              ),
            ),
            ListTile(
              //leading: Icon(Icons.contacts),
              title: Text("Dice Game"),
              onTap: () {
                Navigator.push(context, MaterialPageRoute(builder: (_) {
                  return DiceApp();
                }));
              },
            ),
            SizedBox(
              child: Divider(
                color: Colors.grey,
              ),
            ),
            ListTile(
              //leading: Icon(Icons.contacts),
              title: Text("List Scroll"),
              onTap: () {
                Navigator.push(context, MaterialPageRoute(builder: (_) {
                  return ListWheelScrollView1();
                }));
              },
            ),
            SizedBox(
              child: Divider(
                color: Colors.grey,
              ),
            ),
            ListTile(
              //leading: Icon(Icons.contacts),
              title: Text("Draggable App"),
              onTap: () {
                Navigator.push(context, MaterialPageRoute(builder: (_) {
                  return DragScreen();
                }));
              },
            ),
            SizedBox(
              child: Divider(
                color: Colors.grey,
              ),
            ),
            ListTile(
              //leading: Icon(Icons.contacts),
              title: Text("Scrollable Screen"),
              onTap: () {
                Navigator.push(context, MaterialPageRoute(builder: (_) {
                  return Article();
                }));
              },
            ),
            SizedBox(
              child: Divider(
                color: Colors.grey,
              ),
            ),
          ],
        ),
      ),
    );
  }
}
