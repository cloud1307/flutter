import 'dart:html';

import 'package:flutter/material.dart';
import 'package:team_luna/utilities/constant.dart';
import 'dart:math';

class CoinApp extends StatefulWidget {
  @override
  _CoinAppState createState() => _CoinAppState();
}

class _CoinAppState extends State<CoinApp> {
  @override
  var userTossScore = 0;
  var computerTossScore = 0;
  var TossCoin = Random().nextInt(2) + 1;
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'Kara Krus',
          style: appBarLabel,
        ),
        backgroundColor: Colors.redAccent,
        centerTitle: true,
      ),
      body: SafeArea(
        child: Stack(
          children: <Widget>[
            Container(
              height: double.infinity,
              child: SingleChildScrollView(
                physics: AlwaysScrollableScrollPhysics(),
                padding: EdgeInsets.symmetric(
                  horizontal: 20,
                ),
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: <Widget>[
                    Center(
                      child: Text(
                        'Score Board',
                        style: appBarLabel,
                      ),
                    ),
                    Center(
                      child: Text(
                        'Computer Score ${computerTossScore} : ${userTossScore} Your Score',
                        style: labelTextStyle,
                      ),
                    ),
                    Column(
                      children: <Widget>[
                        Container(
                          width: 250,
                          height: 300,
                          alignment: Alignment.center,
                          decoration: BoxDecoration(
                              color: Colors.blue,
                              shape: BoxShape.circle,
                              boxShadow: [
                                BoxShadow(
                                  color: Colors.lightBlueAccent,
                                  offset: Offset(6.0, 6.0),
                                ),
                              ]),
                          child: Image.asset(
                              'images/TossCoin/coins${TossCoin}.png'),
                        ),
                        SizedBox(
                          height: 50.0,
                        ),
                        Row(
                          mainAxisAlignment: MainAxisAlignment.center,
                          children: <Widget>[
                            Container(
                              height: 50,
                              width: 150,
                              alignment: Alignment.center,
                              decoration: BoxDecoration(
                                  border: Border.all(
                                      color: Colors.greenAccent, width: 4.0),
                                  borderRadius: BorderRadius.circular(8),
                                  boxShadow: [
                                    BoxShadow(
                                      color: Colors.blueAccent,
                                      offset: Offset(6.0, 6.0),
                                    ),
                                  ]),
                              child: FlatButton(
                                onPressed: () {
                                  setState(() {
                                    TossCoin = Random().nextInt(2) + 1;
                                    if (TossCoin != 1) {
                                      computerTossScore++;
                                    } else {
                                      userTossScore++;
                                    }
                                  });
                                },
                                height: 50,
                                minWidth: 150,
                                hoverColor: Colors.green[500],
                                child: Text(
                                  'Heads',
                                  style: buttonTextstyle,
                                ),
                              ),
                            ),
                            SizedBox(
                              width: 80,
                            ),
                            Container(
                              height: 50,
                              width: 150,
                              alignment: Alignment.center,
                              decoration: BoxDecoration(
                                  border: Border.all(
                                      color: Colors.greenAccent, width: 4.0),
                                  borderRadius: BorderRadius.circular(8),
                                  boxShadow: [
                                    BoxShadow(
                                      color: Colors.redAccent,
                                      offset: Offset(6.0, 6.0),
                                    ),
                                  ]),
                              child: FlatButton(
                                onPressed: () {
                                  setState(() {
                                    TossCoin = Random().nextInt(2) + 1;
                                    if (TossCoin != 2) {
                                      computerTossScore++;
                                    } else {
                                      userTossScore++;
                                    }
                                  });
                                },
                                height: 50,
                                minWidth: 150,
                                hoverColor: Colors.green[500],
                                child: Text(
                                  'Tails',
                                  style: buttonTextstyle,
                                ),
                              ),
                            ),
                          ],
                        ),
                      ],
                    ),
                  ],
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
