import 'package:flutter/material.dart';

class IgnorePointerApp extends StatefulWidget {
  @override
  _IgnorePointerAppState createState() => _IgnorePointerAppState();
}

class _IgnorePointerAppState extends State<IgnorePointerApp> {
  @override
  bool _ignoring = false;
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Ignore Pointer'),
      ),
      body: Builder(
        builder: (context) => Center(
          child: Padding(
            padding: EdgeInsets.all(15.0),
            child: Column(
              mainAxisAlignment: MainAxisAlignment.center,
              children: <Widget>[
                IgnorePointer(
                  ignoring: _ignoring,
                  child: Column(
                    children: <Widget>[
                      RaisedButton(
                        child: Text('Press the button'),
                        onPressed: () {
                          Scaffold.of(context).showSnackBar(
                              SnackBar(content: Text('Button is pressed')));
                        },
                      ),
                      TextField(),
                    ],
                  ),
                ),
                Row(
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: <Widget>[
                    Text('Ignore Pointer?'),
                    Switch(
                        value: _ignoring,
                        onChanged: (bool value) {
                          setState(() {
                            _ignoring = value;
                          });
                        }),
                  ],
                ),
              ],
            ),
          ),
        ),
      ),
    );
  }
}
